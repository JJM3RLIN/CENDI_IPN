<?php

namespace Models;

use Models\ActiveRecord;

class Admin extends ActiveRecord
{

    protected static $tabla = 'usuario';
    protected static $columnasDb = ['id', 'username', 'password', 'correo'];
    public $id;
    public $username;
    public $password;

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? '';
        $this->username= $args['usuario'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    //Checar que el ususario se encuentre en la bd
    public function existeUsuario(){
    $query = 'SELECT * FROM ' . self::$tabla . " WHERE username = '" . $this->username . "'";
    $consulta = self::$db->query($query);
    //>num_rows para ver si nos trajo algo la db
    if(!$consulta->num_rows){
        self::$errores[] = 'El usuario no existe';
        //no regresamos nada
        return;
    }
    return $consulta;
    }
    public function comprobarPassword($resultado){
        //Traemos lo de la BD como un objeto
      $usuario =  $resultado->fetch_object();
      if($usuario->password!== $this->password){
          self::$errores[] = 'Contraseña incorrecta';
          return false;
      }
      return true;
    }
    public function autenticar(){
    //Iniciamos la sesión
    session_start();
    
    //LLenar el arreglo de sesión
    $_SESSION['usuario'] = $this->username;
    $_SESSION['login'] = true;
    
    header('Location: /admin');
    
    }
    public function errores (){
         if($this->username === '' || $this->password === ''){
            self::$errores[]='Todos los campos son obligatorios';
         }
    }
}
