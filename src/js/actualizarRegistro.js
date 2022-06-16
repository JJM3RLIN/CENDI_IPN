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
       document.querySelector("#curp").disabled = true;
       childDatos.curpC = child.curp;
       //curp padre
       childDatos.curpD = child.curpD;
       document.querySelector("#cendi").value = child.cendi;
       childDatos.cendi = child.cendi;
       document.querySelector("#boleta").value = child.boleta;
       document.querySelector("#boleta").disabled = true;
       childDatos.boleta = child.boleta;
       //Seleccionar el grupo
       childDatos.grupo = child.grupo;
      agregarGrupoActu(child.grupo)


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
       document.querySelector("#curpDE").disabled = true;
       derechoHabienteDatos.curp = derecho.curp;
       document.querySelector("#puesto").value = derecho.puesto;
       derechoHabienteDatos.puesto = derecho.puesto;
       document.querySelector("#sueldo").value = derecho.sueldo;
       derechoHabienteDatos.sueldo =  derecho.sueldo;
       document.querySelector("#nEmpleado").value = derecho.nEmpleado;
       derechoHabienteDatos.nEmpleado = derecho.nEmpleado;

       //Verificar si es superior o medio superior
       derechoHabienteDatos.adscripcion = derecho.adscripcion;
       let tipoAd =  derecho.adscripcion.includes('CECYT') || derecho.adscripcion.includes('CET') ? 'medioSuperior' : 'superior';
       document.querySelector('#tipoEscuela').value = tipoAd;
       agregarEscuelasActu(tipoAd, derecho.adscripcion);
       document.querySelector("#horaTrabajo").value = derecho.horarioTrabajo;
       derechoHabienteDatos.horarioTrabajo = derecho.horarioTrabajo;
       document.querySelector("#extencionDE").value = derecho.extencion;
       derechoHabienteDatos.extension = derecho.extencion;

       //Conyugue
       if(conyu === 0){
        document.querySelector("#rNo").checked = true;
        //Presentar btn
        const formFotos = document.querySelector('.formFotos');
       const div = document.createElement('DIV');
        div.innerHTML = `<button class="bg-red-800 cursor-pointer px-3 py-2 hover:bg-red-900 text-white font-bold w-full mt-3 text-xl" type="submit">Actualizar fotos</button>`;
        formFotos.appendChild(div);
       }else{
        document.querySelector("#rSi").checked = true;
        console.log(conyu)
        //Aparecer btn y foto del conyugue
        mostrarFotoConyugue(true);
        document.querySelector("[data-paso='3']").classList.remove('hidden');
        //Mostrar info del conyugue
     document.querySelector('#nombreCon').value = conyu.nombre;
     conyuDatos.nombreCO = conyu.nombre;
     document.querySelector('#pApellidoCon').value = conyu.apellidoP;
     conyuDatos.apellidoPCO = conyu.apellidoP;
     document.querySelector('#sApellidoCon').value = conyu.apellidoM;
     conyuDatos.apellidoMCO = conyu.apellidoM;
     document.querySelector("#tel_fCon").value = conyu.telefono;
     conyuDatos.tel_trabajo = conyu.telefono;
     document.querySelector("#lugarTrabCon").value = conyu.lugarTrabajo;
     conyuDatos.lugarTrabajo = conyu.lugarTrabajo;
     document.querySelector('#domiTrabajoCon').value = conyu.domicilioTrabajo;
     conyuDatos.domicilioTrabajo = conyu.domicilioTrabajo;;
     document.querySelector('#telTrabajo').value = conyu.telTrabajo;
     conyuDatos.tel_trabajo = conyu.telTrabajo;
     document.querySelector('#extCon').value = conyu.extencion;
     conyuDatos.extensionCO = conyu.extencion;
       }
     
}

async function actualizarInformacion(e){
    e.preventDefault();

    const datos = new FormData();
 
  
    //Niño
    const valoresChild = Object.values(childDatos);
   //Añadimos los datos del niño para que sean enviados al servidor
   Object.keys(childDatos).forEach((key, index) => {
     datos.append(key, valoresChild[index]);
   });
  
   //Añadimos los datos del DerechoHabiente
   const valoresDe = Object.values(derechoHabienteDatos);
   //Obtenemos los atributos en un arreglo
   Object.keys(derechoHabienteDatos).forEach((key, index) => {
     datos.append(key, valoresDe[index]);
   });
  
   if(!Object.values(conyuDatos).includes("")){
     datos.append('tieneCon', '1');
     const valoresConyu = Object.values(conyuDatos);
     Object.keys(conyuDatos).forEach((key, index) => {
      datos.append(key, valoresConyu[index]);
    });
   }else{
    datos.append('tieneCon', '0');
   }
try {
  const url = '/admin/actualizar';
    const solicitud = await fetch(url,{
        method: 'POST',
        body: datos
    });
    const respuesta = await solicitud.json();
    console.log(respuesta);
    if(respuesta.respuesta === 1){
      alerta('Se actualizo correctamente la información', 'success');
      //redireccionamos
     setTimeout(() => {
      location.href('/admin');
     }, 2000);
    } 
    
} catch (error) {
    console.log(error);
}
    console.log(childDatos);
    console.log(derechoHabienteDatos);
    console.log(conyuDatos)
}
async function traerMunicipios (estado, derechoMun){
      //consulta a los municipios
  const urlMunicipios = "/mexico/municipios";
  const peticion = await fetch(urlMunicipios);
  const resultado = await peticion.json();
  colcocarMunicipios(resultado[estado])
  document.querySelector("#alcmuni").value = derechoMun;
}
async function agregarEscuelasActu(tipo, adscripcion){
    const url = "/escuelas";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
      crearOptionEscuela(resultado[tipo]);
      document.querySelector("#adscripcion").value = adscripcion;
    
  }

  async function agregarGrupoActu(grupo){
    try {
      const url = '/grupos';
    const peticion = await fetch(url);
    const respuesta = await peticion.json();
    crearOptionGrupos(respuesta);
    const select = document.querySelector('#grupo').value = grupo;
    } catch (error) {
      console.log(error);
    }
  }

function tipoActualizacion(){
  const btnDatos = document.querySelector('#btnDatos');
  const btnFotos = document.querySelector('#btnFotos');
  const formFotos = document.querySelector('#fotosActualizar');
  const formDatos = document.querySelector('#datosActualizar');
//Evitar que nos salte warning en la consola
  if(formFotos){
  btnDatos.addEventListener('click', ()=>{
    if(formDatos.classList.contains('hidden')){
      formDatos.classList.remove('hidden');
      formFotos.classList.add('hidden');
     //Desmarcar el btn de las fotos
    btnFotos.classList.remove('text-white');
    btnFotos.classList.remove('bg-orange-800');
    btnFotos.classList.add('bg-transparent');
    btnFotos.classList.add('text-orange-700');

    btnDatos.classList.remove('bg-transparente');
    btnDatos.classList.add('text-white');

    }
    btnDatos.classList.add('bg-amber-600');
    btnDatos.classList.remove('text-amber-700');
  })
  btnFotos.addEventListener('click', ()=>{
    formDatos.classList.add('hidden');
    formFotos.classList.remove('hidden');

    //Marcar el btn de las fotos
    btnFotos.classList.add('text-white');
    btnFotos.classList.add('bg-orange-800');
    btnFotos.classList.remove('bg-transparent');
    btnFotos.classList.remove('text-orange-700');
   //Desmarcar el btn de datos
   btnDatos.classList.add('bg-transparent');
   btnDatos.classList.add('text-amber-700');
   btnDatos.classList.remove('bg-amber-600');
   btnDatos.classList.remove('text-white');

  })
}
}