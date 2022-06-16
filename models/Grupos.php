<?php
namespace Models;
use Models\ActiveRecord;
class Grupos extends ActiveRecord{
    protected static $tabla = 'grupos';
    protected static $columnasDb = ['nombre', 'cupo'];
    public $nombre;
    public $cupo;

    public function __construct( $nombre='', $cupo=''){
        $this->nombre = $nombre ?? '';
        $this->cupo = $cupo ?? '';
    }
    public static function decrementar($nombre){
        $grupoBd = new Grupos;
        $sentencia = "nombre='" . $nombre . "'";
        $cupo = $grupoBd->some($sentencia)[0]->cupo;
           $query = 'UPDATE ' . self::$tabla .  " SET cupo='" . $cupo-1 . "'" . " WHERE nombre='" . $nombre . "'"; 
           $resultado = self::$db->query($query);
           return $resultado;
    }
}