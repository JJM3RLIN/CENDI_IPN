<?php

namespace Models;

use Models\ActiveRecord;

class Conyu extends ActiveRecord
{

    protected static $tabla = 'conyu';
    protected static $columnasDb = ['foto', 'apellidoP', 'apellidoM', 'nombre', 'domicilio', 'entidadFederativa', 'municipio', 'cp', 'telefono', 'telTrabajo', 'lugarTrabajo', 'domicilioTrabajo', 'curpD', 'extencion'];
    public $foto;
    public $apellidoP;
    public $apellidoM;
    public $nombre;
    public $domicilio;
    public $municipio;
    public $entidadFederativa;
    public $lugarTrabajo;
    public $domicilioTrabajo;
    public $telTrabajo;
    public $telefono;
    public $extencion;
    public $cp;
    public $curpD;

    public function __construct($args = [])
    {
        $this->apellidoM = $args['apellidoM'];
        $this->apellidoP = $args['apellidoP'];
        $this->nombre = $args['nombre'];
        $this->domicilio = $args['domicilio'];
        $this->municipio = $args['municipio'];
        $this->entidadFederativa = $args['entidadFederativa'];
        $this->lugarTrabajo = $args['lugarTrabajo'];
        $this->domicilioTrabajo = $args['domicilioTrabajo'];
        $this->telTrabajo = $args['telTrabajo'];
        $this->telefono = $args['telefono'];
        $this->extencion = $args['extencion'];
        $this->cp = $args['cp'];
        $this->curpD = $args['curpD'];
    }
    
}
