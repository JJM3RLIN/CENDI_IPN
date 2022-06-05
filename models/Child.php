<?php
namespace Models;
use Models\ActiveRecord;
class Child extends ActiveRecord{
    protected static $tabla = 'child';
    protected static $columnasDb = ['foto', 'cendi', 'boleta', 'grupo', 'apellidoM', 'apellidoP', 'nombre', 'fechaNacimiento', 'edad', 'curp', 'curpD'];
    public $foto;
    public $cendi;
    public $boleta;
    public $grupo;
    public $apellidoP;
    public $apellidoM;
    public $nombre;
    public $fechaNacimiento;
    public $edad;
    public $curp;
    public $curpD;

    public function __construct($args = [])
    {
        $this->apellidoP = $args['apellidoP'] ?? '';
        $this->apellidoM = $args['apellidoM'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->cendi = $args['cendi'] ?? '';
        $this->boleta = $args['boleta'] ?? '';
        $this->grupo = $args['grupo'] ?? '';
        $this->fechaNacimiento = $args['fechaNacimiento'] ?? '';
        $this->edad = $args['edad'] ?? '';
        $this->curp = $args['curp'] ?? '';
        $this->curpD = $args['curpD'] ?? '';
    }

}