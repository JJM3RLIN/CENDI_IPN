<?php
namespace Models;
use Models\ActiveRecord;
class Derechohabiente extends ActiveRecord{
    protected static $tabla = 'derechoHabiente';
    protected static $columnasDb = ['foto', 'apellidoP', 'apellidoM', 'nombre', 'domicilio', 'entidadFederativa', 'municipio', 'cp', 'correo', 'tel_f', 'tel_c', 'ocupacion', 'curp', 'puesto', 'sueldo', 'nEmpleado', 'adscripcion', 'horarioTrabajo', 'extencion'];
    public $foto;
    public $apellidoP; 
    public $apellidoM;
    public $nombre;
    //Datos de su direccion
    public $municipio;
    public $entidadFederativa;
    public $domicilio;
    public $cp;
    public $tel_f;
    public $tel_c;
    public $correo;
    public $ocupacion;
    public $curp;
    public $puesto;
    public $sueldo;
    public $nEmpleado;
    public $adscripcion;
    public $horarioTrabajo;
    public $extencion;
    
    public function __construct($args = [])
    {
        $this->apellidoP = $args['apellidoP'] ?? '';
        $this->apellidoM = $args['apellidoM'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->municipio = $args['municipio'] ?? '';
        $this->entidadFederativa = $args['entidadFederativa'] ?? '';
        $this->domicilio = $args['domicilio'] ?? '';
        $this->cp = $args['cp'] ?? '';
        $this->tel_f = $args['tel_f'] ?? '';
        $this->tel_c = $args['tel_c'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->ocupacion = $args['ocupacion'] ?? '';
        $this->curp = $args['curp'] ?? '';
        $this->puesto = $args['puesto'] ?? '';
        $this->sueldo = $args['sueldo'] ?? '';
        $this->nEmpleado = $args['nEmpleado'] ?? '';
        $this->adscripcion = $args['adscripcion'] ?? '';
        $this->horarioTrabajo = $args['horarioTrabajo'] ?? '';
        $this->extencion = $args['extencion'] ?? '';

    }
}