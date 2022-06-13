function actualizarRegistro(){
    const formActualizar = document.querySelector('.formActualizar');

    if (formActualizar){

        //Guardara la info del form
      guardarInfoChild();
      guardarInfoDerecho();
      guardarInfoConyugue();
    //Obtener los parametros en la url
    const valoresUrl =  window.location.search;
    //Valores que se encuentran en la url
    const parametros = new URLSearchParams(valoresUrl);
    //Obtenemos el curp
    const curpUrl = parametros.get('curp');
     traerInfoUpdate(curpUrl);


     //Actualizar los datos
     formActualizar.addEventListener('submit', (e)=>actualizarInformacion(e))
    }


   
}
async function traerInfoUpdate(curp){
    const form = new FormData();
    form.append('curp', curp);
    
    try {
    const url = '/admin/traerInfo';
    const resultado = await fetch(url, {
        method: 'POST',
        body: form
    } );
    const respuesta = await resultado.json();
    mostrarValores(respuesta);
    } catch (error) {
        console.log(error);
    }
    
    
}
function mostrarValores({child, derecho, conyu}){
  
       document.querySelector("#nombre").value = child.nombre;
       childDatos.nombreC = child.nombre;
       document.querySelector("#apellidoM").value = child.apellidoM;
       childDatos.apellidoMC = child.apellidoM;
       document.querySelector("#apellidoP").value = child.apellidoP;
       childDatos.apellidoPC = child.apellidoP;
       document.querySelector("#fnac").value = child.fechaNacimiento;
       childDatos.fNacimiento = child.fechaNacimiento;
       document.querySelector("#edad").value = child.edad;
       childDatos.edad = child.edad;
       document.querySelector("#curp").value = child.curp;
       childDatos.curpC = child.curp;
       //curp padre
       childDatos.curpD = child.curpD;
       document.querySelector("#cendi").value = child.cendi;
       childDatos.cendi = child.cendi;
       document.querySelector("#boleta").value = child.boleta;
       childDatos.boleta = child.boleta;
       document.querySelector("#grupo").value = child.grupo;
       childDatos.grupo = child.grupo;

    //DerechoHabiente
       document.querySelector("#pApellidoD").value = derecho.apellidoP;
       derechoHabienteDatos.apellidoP = derecho.apellidoP;
       document.querySelector("#sApellidoD").value = derecho.apellidoM;
       derechoHabienteDatos.apellidoM = derecho.apellidoM;
       document.querySelector("#nombreDE").value = derecho.nombre;
       derechoHabienteDatos.nombre = derecho.nombre;
       document.querySelector("#domicilio").value = derecho.domicilio;
       derechoHabienteDatos.domicilio = derecho.domicilio;
       document.querySelector("#entidad").value = derecho.entidadFederativa;
       derechoHabienteDatos.entidadFederativa = derecho.entidadFederativa;
       traerMunicipios(derecho.entidadFederativa, derecho.municipio);
       derechoHabienteDatos.municipio = derecho.municipio;
       document.querySelector("#cp").value = derecho.cp;
       derechoHabienteDatos.cp = derecho.cp;
       document.querySelector("#tel_f").value = derecho.tel_f;
       derechoHabienteDatos.tel_F = derecho.tel_f;
       document.querySelector("#tel_c").value = derecho.tel_c;
       derechoHabienteDatos.tel_C =  derecho.tel_c;
       document.querySelector("#correo").value = derecho.correo;
       derechoHabienteDatos.correo = derecho.correo;
       document.querySelector("#ocupacion").value = derecho.ocupacion;
       derechoHabienteDatos.ocupacion = derecho.ocupacion;
       document.querySelector("#curpDE").value = derecho.curp;
       derechoHabienteDatos.curp = derecho.curp;
       document.querySelector("#puesto").value = derecho.puesto;
       derechoHabienteDatos.puesto = derecho.puesto;
       document.querySelector("#sueldo").value = derecho.sueldo;
       derechoHabienteDatos.sueldo =  derecho.sueldo;
       document.querySelector("#nEmpleado").value = derecho.nEmpleado;
       derechoHabienteDatos.nEmpleado = derecho.nEmpleado;
       document.querySelector("#adscripcion").value = derecho.adscripcion;
       derechoHabienteDatos.adscripcion = derecho.adscripcion;
       document.querySelector("#horaTrabajo").value = derecho.horarioTrabajo;
       derechoHabienteDatos.horarioTrabajo = derecho.horarioTrabajo;
       document.querySelector("#extencionDE").value = derecho.extencion;
       derechoHabienteDatos.extension = derecho.extencion;

       //Conyugue
       if(conyu === 0){
        console.log('no tiene conyugue');
        document.querySelector("#rNo").checked = true;
       }else{
        document.querySelector("#rSi").checked = true;
       }
    /* document.querySelector('#nombreCon') = '';
     document.querySelector('#pApellidoCon') = '';
     document.querySelector('#sApellidoCon') = '';
     document.querySelector("#tel_fCon") = '';
     document.querySelector("#lugarTrabCon") = '';
     document.querySelector('#domiTrabajoCon') = '';
     document.querySelector('#telTrabajo') = '';
     document.querySelector('#extCon') = '';*/
}

function actualizarInformacion(e){
    e.preventDefault();
    console.log(childDatos);
    console.log(derechoHabienteDatos);
}
async function traerMunicipios (estado, derechoMun){
      //consulta a los municipios
  const urlMunicipios = "/mexico/municipios";
  const peticion = await fetch(urlMunicipios);
  const resultado = await peticion.json();
  colcocarMunicipios(resultado[estado])
  console.log(derechoMun)
  document.querySelector("#alcmuni").value = derechoMun;
}