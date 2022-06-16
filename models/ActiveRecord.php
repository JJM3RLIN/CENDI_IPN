<?php

namespace Models;

class ActiveRecord
{
    protected static $db;
    protected static $columnasDb = [];

    //Tabla de la db para saber vual se ejecuta y sea mas dinamico
    protected static $tabla = '';
    //Guardar errores en los formularios (campos vacios)
    protected static $errores = [];

    //Iniciar la base de datos
    public static function setDb($database)
    {

        //Con self hago referencia a un atributo estatico de la clase
        self::$db = $database;
    }
    //pasar todo a string para evitar inyecciones
    public function sanitizar()
    {
        $atributos = [];
        $sanitizados = [];
        //Recorremos las columnas de la BD para mapear los datos
        foreach (static::$columnasDb as $columna) {
            //El id no se actualiza
            if ($columna === 'curp' || $columna === 'foto') continue;
            $atributos[$columna] = $this->$columna;
        }
        foreach ($atributos as $key => $value) {
            $sanitizados[$key] = self::$db->escape_string($value);
        }
        return $sanitizados;
    }
    public function sanitizarGuardar()
    {
        $atributos = [];
        $sanitizados = [];
        //Recorremos las columnas de la BD para mapear los datos
        foreach (static::$columnasDb as $columna) {
            if($columna === 'foto') continue;
            $atributos[$columna] = $this->$columna;
        }
        foreach ($atributos as $key => $value) {
            $sanitizados[$key] = self::$db->escape_string($value);
        }
        return $sanitizados;
    }

    public function add(){
        $atributos = $this->sanitizarGuardar();
        $query = " INSERT INTO ";
        $query .= static::$tabla . " ( ";
        $query.= join(', ', array_keys($atributos));
        $query.= " ) VALUES ('";
        $query.= join( "', '", array_values($atributos));
        $query.= "') "; 
        $resultado = self::$db->query($query);
    
       return $resultado;
    }

    public function addImage($imagen, $SentenciaCurp){

        $query = " UPDATE  ";
        $query .= static::$tabla . " SET ";
        $query.= "foto='";
        $query.= $imagen;
        $query.= "' WHERE " . $SentenciaCurp; 
        $resultado = self::$db->query($query);
    
       return $resultado;
    }

    //Traer todo de la db
    public static function all()
    {
        $query = 'SELECT * FROM ' . static::$tabla;
        $resultado = self::consultaSQL($query);
        
        return $resultado;
    }

    public function some ($sentencia){
      $query = 'SELECT * FROM ' . static::$tabla . " WHERE " . $sentencia;
      $resultado = self::consultaSQL($query);
       return $resultado;
    }
    //Actualizar un registro
    public function update($sentencia)
    {
        $atributos = $this->sanitizar();
        //Unit la BD con los nuevos valores
        $valores = [];
        //Hacer mas dinamico el actualizado y evitamos la foto
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key} = '{$value}'";
        }
        //Unimos todo los guardado en el arreglo como un string
        $query = 'UPDATE ' . static::$tabla . ' SET ' . join(', ', $valores);
        //concatenamos
        $query .= " WHERE " . $sentencia;
      
        $resultado = self::$db->query($query);
        return $resultado;
    }

    //Eliminar un registro
    public  function delete($sentencia)
    {
        $query = 'DELETE FROM' . ' ' . static::$tabla . " WHERE  " . $sentencia;
        $resultado = self::$db->query($query);
        return $resultado;
    }

    //Mandar los querys
    public static function consultaSQL($consulta)
    {
        $resultado = self::$db->query($consulta);
       

        //Guardar lo traido de la bd pero ya transformado en objetos
        $array = [];
        
        //Iterar lo traído desde la BD
        //Se ejecuta hasat el ultimo registro
        while ($registro = $resultado->fetch_assoc()) {
            //Creamos el objeto y lo guardamos
            $array[] = static::crearObjeto($registro);
        }
       

      

        //Liberar Memoria
$resultado->free();
        return $array;
    }
    public static function crearObjeto($registro)
    {

        
        //Creamos un objeto de la clase que invoca, por eso static
        $objeto = new static;
       
        foreach($registro as $key => $value){
   
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    //validacion de que no haya errores en el login
    public static function getErrores()
    {
        return static::$errores;
    }
    public static function LimpiarErrores()
    {
        static::$errores = [];
        return static::$errores;
    }
}
