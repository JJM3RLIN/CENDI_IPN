const childDatos = {
  cendi: "",
  boleta: "",
  grupo: "",
  apellidoPC: "",
  apellidoMC: "",
  nombreC: "",
  fNacimiento: "",
  edad: "",
  curpC: "",
  curpD: ""
};
const derechoHabienteDatos = {
  apellidoP: "",
  apellidoM: "",
  nombre: "",
  //Datos de su direccion
  domicilio: "",
  municipio: "",
  entidadFederativa: "",
  cp: "",
  tel_F: "",
  tel_C: "",
  correo: "",
  ocupacion: "",
  curp: "",
  puesto: "",
  sueldo: "",
  nEmpleado: "",
  adscripcion: "",
  horarioTrabajo: "",
  extension: ""
};
const conyuDatos = {
  apellidoPCO: "",
  apellidoMCO: "",
  nombreCO: "",
  lugarTrabajo: "",
  domicilioTrabajo: "",
  telefono:"",
  tel_trabajo: "",
  extensionCO: ""
};
const resumen ={
  cendi: "",
  boleta: "",
  grupo: "",
  apellidoPC: "",
  apellidoMC: "",
  nombreC: "",
  fNacimiento: "",
  edad: "",
  curpC: "",
  apellidoP: "",
  apellidoM: "",
  nombre: "",
  domicilio: "",
  municipio: "",
  entidadFederativa: "",
  cp: "",
  tel_F: "",
  tel_C: "",
  correo: "",
  ocupacion: "",
  curp: "",
  puesto: "",
  sueldo: "",
  nEmpleado: "",
  adscripcion: "",
  horarioTrabajo: "",
  extension: "",
  //Conyugue
  apellidoPCO: "",
  apellidoMCO: "",
  nombreCO: "",
  lugarTrabajo: "",
  domicilioTrabajo: "",
  telefono: "",
  tel_trabajo: "",
  extensionCO: ""

}
function guardarInfoChild() {
  const nombreF = document.querySelector("#nombre");
  const apellidoMF = document.querySelector("#apellidoM");
  const apellidoPF = document.querySelector("#apellidoP");
  const fNacimientoF = document.querySelector("#fnac");
  const edadF = document.querySelector("#edad");
  const curpF = document.querySelector("#curp");
  const cendiF = document.querySelector("#cendi");
  const boletaF = document.querySelector("#boleta");
  const grupoF = document.querySelector("#grupo");

  cendiF.addEventListener("change", (e) => {
    childDatos.cendi = e.target.value;
    //con option nos trae como arreglo las opciones que tenemos y selectedIndex nos da el index del option al que se le dio click
   resumen.cendi = e.target.options[cendiF.selectedIndex].innerText;

   
  });
  boletaF.addEventListener("change", (e) => {
    const regexBoleta = /[PP | PE | 2021][0-9]{8}/;
    if (!regexBoleta.test(e.target.value)) {
      mostrarAlerta(
        "Formato invalido de la boleta",
        e.target.parentElement.parentElement.parentElement
      );
    } else {
      childDatos.boleta = e.target.value;
      resumen.boleta = e.target.value;
     
    }
  });
  grupoF.addEventListener("change", (e) => {
    childDatos.grupo = e.target.value;
    resumen.grupo = e.target.value;

  });
  nombreF.addEventListener("change", (e) => {
    if (validarTexto(e.target.value)) {
      mostrarAlerta("No debe contener números", e.target.parentElement);
    } else {
      childDatos.nombreC = e.target.value;
      resumen.nombreC = e.target.value;
    }
  });
  apellidoMF.addEventListener("change", (e) => {
    if (validarTexto(e.target.value)) {
      mostrarAlerta(
        "No debe contener números",
        e.target.parentElement.parentElement.parentElement
      );
    } else {
      childDatos.apellidoMC= e.target.value;
      resumen.apellidoMC = e.target.value;
    }
  });
  apellidoPF.addEventListener("change", (e) => {
    if (validarTexto(e.target.value)) {
      mostrarAlerta(
        "No debe contener números",
        e.target.parentElement.parentElement.parentElement
      );
    } else {
      childDatos.apellidoPC = e.target.value;
      resumen.apellidoPC = e.target.value;
    }
  });
  fNacimientoF.addEventListener("change", (e) => {
    childDatos.fNacimiento = e.target.value;
    resumen.fNacimiento = e.target.value;
  });
  edadF.addEventListener("change", (e) => {
    childDatos.edad = e.target.value;
    resumen.edad = e.target.value;
  });
  curpF.addEventListener("change", (e) => {
    if (!validarCurp(e.target.value)) {
      mostrarAlerta("El formato del CURP es invalido", e.target.parentElement);
    } else {
      childDatos.curpC = e.target.value;
      resumen.curpC = e.target.value;
     
    }
  });
}
function guardarInfoDerecho() {
  const apellidoP = document.querySelector("#pApellidoD");
  const apellidoM = document.querySelector("#sApellidoD");
  const nombre = document.querySelector("#nombreDE");
  const domicilio = document.querySelector("#domicilio");
  const municipio = document.querySelector("#alcmuni");
  const entidadFederativa = document.querySelector("#entidad");
  const cp = document.querySelector("#cp");
  const tel_f = document.querySelector("#tel_f");
  const tel_c = document.querySelector("#tel_c");
  const correo = document.querySelector("#correo");
  const ocupacion = document.querySelector("#ocupacion");
  const curp = document.querySelector("#curpDE");
  const puesto = document.querySelector("#puesto");
  const sueldo = document.querySelector("#sueldo");
  const nEmpleado = document.querySelector("#nEmpleado");
  const adscripcion = document.querySelector("#adscripcion");
  const horarioTrabajo = document.querySelector("#horaTrabajo");
  const extension = document.querySelector("#extencionDE");
  apellidoP.addEventListener("change", (e) => {
    if (validarTexto(e.target.value)) {
      mostrarAlerta(
        "Apellido no valido",
        e.target.parentElement.parentElement.parentElement
      );
    } else {
      derechoHabienteDatos.apellidoP = e.target.value;
      resumen.apellidoP = e.target.value;
    }
  });
  apellidoM.addEventListener("change", (e) => {
    if (validarTexto(e.target.value)) {
      mostrarAlerta(
        "Apellido no valido",
        e.target.parentElement.parentElement.parentElement
      );
    } else {
      derechoHabienteDatos.apellidoM = e.target.value;
      resumen.apellidoM = e.target.value;
    }
  });
  nombre.addEventListener("change", (e) => {
    derechoHabienteDatos.nombre = e.target.value;
    resumen.nombre = e.target.value;
  });
  domicilio.addEventListener("change", (e) => {
    derechoHabienteDatos.domicilio = e.target.value;
    //conyuDatos.domicilio = e.target.value;
    resumen.domicilio = e.target.value;
  });
  municipio.addEventListener("change", (e) => {
    derechoHabienteDatos.municipio = e.target.value;
    //conyuDatos.municipio = e.target.value;
    resumen.municipio = e.target.options[municipio.selectedIndex].innerText;
  });
  entidadFederativa.addEventListener("change", (e) => {
    derechoHabienteDatos.entidadFederativa = e.target.value;
    //conyuDatos.entidadFederativa = e.target.value;
    resumen.entidadFederativa = e.target.options[entidadFederativa.selectedIndex].innerText;
  });
  cp.addEventListener("change", (e) => {
    derechoHabienteDatos.cp = e.target.value;
    //conyuDatos.cp = e.target.value;
    resumen.cp = e.target.value;
  });
  tel_f.addEventListener("change", (e) => {
    derechoHabienteDatos.tel_F = e.target.value;
    resumen.tel_F = e.target.value;
  });
  tel_c.addEventListener("change", (e) => {
    derechoHabienteDatos.tel_C = e.target.value;
    resumen.tel_C = e.target.value;
  });
  correo.addEventListener("change", (e) => {
    derechoHabienteDatos.correo = e.target.value;
    resumen.correo = e.target.value;
  });
  ocupacion.addEventListener("change", (e) => {
    derechoHabienteDatos.ocupacion = e.target.value;
    resumen.ocupacion = e.target.options[ocupacion.selectedIndex].innerText;
  });
  curp.addEventListener("change", (e) => {
    if (!validarCurp(e.target.value)) {
      mostrarAlerta("Formato de CURP no valido", e.target.parentElement);
    } else {
      derechoHabienteDatos.curp = e.target.value;
      childDatos.curpD = e.target.value;
      resumen.curp = e.target.value
    }
  });
  puesto.addEventListener("change", (e) => {
    derechoHabienteDatos.puesto = e.target.value;
    resumen.puesto = e.target.value;
  });
  sueldo.addEventListener("change", (e) => {
    derechoHabienteDatos.sueldo = e.target.value;
    resumen.sueldo = e.target.value;
  });
  nEmpleado.addEventListener("change", (e) => {
    derechoHabienteDatos.nEmpleado = e.target.value;
    resumen.nEmpleado = e.target.value;
  });
  adscripcion.addEventListener("change", (e) => {
    derechoHabienteDatos.adscripcion = e.target.value;
    resumen.adscripcion = e.target.options[adscripcion.selectedIndex].innerText;
  });
  horarioTrabajo.addEventListener("change", (e) => {
    derechoHabienteDatos.horarioTrabajo = e.target.value;
    resumen.horarioTrabajo = e.target.options[horarioTrabajo.selectedIndex].innerText;
  });
  extension.addEventListener("change", (e) => {
    derechoHabienteDatos.extension = e.target.value;
    resumen.extension = e.target.value;
  });
}
function guardarInfoConyugue(){

  const nombre = document.querySelector('#nombreCon');
  const apellidoP = document.querySelector('#pApellidoCon');
  const apellidoM = document.querySelector('#sApellidoCon');
  const tel_f = document.querySelector("#tel_fCon");
  const lugarTrabajo = document.querySelector("#lugarTrabCon");
  const domicilioTrabajo = document.querySelector('#domiTrabajoCon');
  const telTrabajo = document.querySelector('#telTrabajo');
  const extension = document.querySelector('#extCon');

  //Validar Campos
  nombre.addEventListener('change', e =>{
    if (validarTexto(e.target.value)) {
      mostrarAlerta("El nombre no debe contener números", e.target.parentElement);
    } else {
      conyuDatos.nombreCO = e.target.value;
      resumen.nombreCO = e.target.value;
    }
  });
  apellidoM.addEventListener('change', e =>{
    if (validarTexto(e.target.value)) {
      mostrarAlerta("El apellido no debe contener números", e.target.parentElement);
    } else {
      conyuDatos.apellidoMCO = e.target.value;
      resumen.apellidoMCO = e.target.value;
    }
  });

  apellidoP.addEventListener('change', e =>{
    if (validarTexto(e.target.value)) {
      mostrarAlerta("El apellido no debe contener números", e.target.parentElement);
    } else {
      conyuDatos.apellidoPCO = e.target.value;
      resumen.apellidoPCO = e.target.value;
    }
  });
  tel_f.addEventListener('change', e=>{
    conyuDatos.telefono = e.target.value;
    resumen.telefono = e.target.value;
  });

  telTrabajo.addEventListener('change', e=>{
    conyuDatos.tel_trabajo = e.target.value;
    resumen.tel_trabajo = e.target.value;
  });
  lugarTrabajo.addEventListener('change', e=>{
    conyuDatos.lugarTrabajo = e.target.value;
    resumen.lugarTrabajo = e.target.value;
  });
  extension.addEventListener('change', e=>{
    conyuDatos.extensionCO = e.target.value;
    resumen.extensionCO = e.target.value;
  })
  domicilioTrabajo.addEventListener('change', e=>{
    conyuDatos.domicilioTrabajo = e.target.value;
    resumen.domicilioTrabajo = e.target.value
  });

}
 function validarForm() {
   
  //Obtenemos los atributos en un arreglo
  if ( Object.values(childDatos).includes("") ) {
    alerta('Todos los campos son obligatorios', 'error');
  } else {
    //Mostranos el resumen
    mostrarResumen();
  }
}

function mostrarResumen(){

  const form = document.querySelector('.form')
  const resumen = document.querySelector('#resumen')
  const btnModificar = document.querySelector('.modificar')
  const btnSubirDatos = document.querySelector('#subirDatos');
  const formFotos = document.querySelector('.fotos');
  //Ocultar los btns del formulario
  const paginacion = document.querySelector('.paginacion');

  //Cambiar el h1 de la pagina
  const titulo = document.querySelector('.titulo');
  
  //Mostrar el resumen y ocultar lo que este asociado al formulario 
 form.classList.add('hidden');
 paginacion.classList.add('hidden');
 resumen.classList.remove('hidden');
 resumen.classList.add('block');

 //Mostrar el form de fotos
formFotos.classList.remove('hidden');
 //Cambiar el texco del h1
 titulo.innerHTML = `Hola <span class='font-bold'>${derechoHabienteDatos.nombre}</span> verifica que tus datos sean correctos`;

  //Mnadar los datos al srrvidor
btnSubirDatos.addEventListener('click', ()=> { 
   
  btnSubirDatos.disabled = true;
        subirDatos() 
})

 //Agregar los datos al resumen
 mostrarInfo();

 //Agregar los value a los form de fotos
 agregarValueFotos();

  btnModificar.addEventListener('click', ()=>{
      //Ocultamos el resumen y mostramos form
    paginacion.classList.remove('hidden');
    form.classList.remove('hidden');
    resumen.classList.add('hidden');
    formFotos.classList.add('hidden');
    titulo.textContent = "Formulario para la ficha de inscripción-reinscripción";

})
}
function agregarValueFotos(){
  const inputBoleta = document.querySelector("#bolteaImg");
  const inputCurp = document.querySelector("#curpImg");
  inputBoleta.value = childDatos.boleta;
  inputCurp.value = derechoHabienteDatos.curp;
}
//Mostrar la infor que estaba en los input
function mostrarInfo(){
 
  const {adscripcion, apellidoM, apellidoMC, apellidoMCO, apellidoP, apellidoPC, apellidoPCO, boleta, 
         cendi, correo, cp, curp, curpC, domicilio, domicilioTrabajo ,edad, entidadFederativa, 
         extension, extensionCO ,fNacimiento, grupo, horarioTrabajo, lugarTrabajo ,municipio, nEmpleado, nombre, 
         nombreC, nombreCO, ocupacion, puesto, sueldo, tel_C, telefono ,tel_F, tel_trabajo} = resumen
  //Datos del niño
  document.querySelector('#nombreC').textContent  = nombreC;
  document.querySelector('#apellidoPC').textContent = apellidoPC;
  document.querySelector('#apellidoMC').textContent = apellidoMC;
  document.querySelector('#boletaR').textContent = boleta;
  document.querySelector('#cendiR').textContent = cendi;
  document.querySelector('#grupoR').textContent = grupo;
  document.querySelector('#fNacimientoR').textContent = fNacimiento;
  document.querySelector('#edadR').textContent = edad;
  document.querySelector('#curpCR').textContent = curpC;
  
  //Datos del derechoHabiente
  document.querySelector('#nombreR').textContent = nombre;
  document.querySelector('#apellidoMR').textContent = apellidoM;
  document.querySelector('#apellidoPR').textContent = apellidoP;
  document.querySelector('#correoR').textContent = correo;
  document.querySelector('#curpR').textContent = curp;
  document.querySelector('#domicilioR').textContent = domicilio;
  document.querySelector('#entidadFederativaR').textContent = entidadFederativa;
  document.querySelector('#municipioR').textContent = municipio;
  document.querySelector('#cpR').textContent = cp;
  document.querySelector('#adscripcionR').textContent = adscripcion;
  document.querySelector('#nEmpleadoR').textContent = nEmpleado;
  document.querySelector('#horarioTrabajoR').textContent = horarioTrabajo;
  document.querySelector('#ocupacionR').textContent = ocupacion;
  document.querySelector('#puestoR').textContent = puesto;
  document.querySelector('#sueldoR').textContent = `$${sueldo}`;
  document.querySelector('#tel_CR').textContent = tel_C;
  document.querySelector('#tel_FR').textContent = tel_F;
  document.querySelector('#extensionR').textContent = extension;

  //Datos del conyugue
  document.querySelector('#apellidoPConR').textContent = apellidoPCO;
  document.querySelector('#apellidoMConR').textContent = apellidoMCO;
  document.querySelector('#nombreConR').textContent = nombreCO;
  document.querySelector('#domicilioConR').textContent = domicilio;
  document.querySelector('#entidadFederativaConR').textContent = entidadFederativa;
  document.querySelector('#municipioConR').textContent = municipio;
  document.querySelector('#cpConR').textContent = cp;
  document.querySelector('#tel_FConR').textContent = telefono;
  document.querySelector('#tel_trabajoConR').textContent = tel_trabajo;
  document.querySelector('#extensionConR').textContent = extensionCO;
  document.querySelector('#lugarTrabajoConR').textContent = lugarTrabajo; 
  document.querySelector('#domicilioTrabajoConR').textContent = domicilioTrabajo;



}

function LimpiarInfo (){
  const btnLimpiar = document.querySelector('#limpiar');

  //Volvemos a ocultar el btn para registrar
  btnLimpiar.addEventListener('click', ()=>{
    const btnEnviarInfo = document.querySelector('#validar');
    btnEnviarInfo.classList.add('hidden');
   
    //Traemos como arreglo los atributos de los objetos
    Object.keys(childDatos).forEach(key=>{

      //Acceder a los atributos del objeto y limpiamos
      childDatos[key] = '';
    });

    Object.keys(derechoHabienteDatos).forEach(key=>{

      derechoHabienteDatos[key] = '';
    });

    Object.keys(conyuDatos).forEach(key=>{

      conyuDatos[key] = '';
    });
    
  })
 
}

async function subirDatos(){

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
   const url = "/usuarios/ApiCrear";

   const respuesta = await fetch(url, {
     method: "POST",
     body: datos
   });

   const resultado = await respuesta.json();
 
   if(resultado.respuesta == '1'){
     alerta('Se guardo correctamente la información', 'success', 'Al subir las fotos se te enviara un correo con la información de la inscripción');

     //Que salga el modal
     mostrarModalFotos()
   }else{
    alerta('Ocurrio un error al guardar tu información', 'error');
   }
   
 } catch (error) {
   console.log(error);
 }

}
function mostrarModalFotos(){
  
}
function validarCurp(curp) {
  const regex =
    /[A-Z]{1}[A,E,I,O,U,X]{1}[A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]/;
  return regex.test(curp);
}
function validarTexto(txt) {
  const regex = /[0-9]/;
  return regex.test(txt);
}
function mostrarAlerta(mensaje, padre) {
  const divAlerta = document.createElement("P");
  divAlerta.textContent = mensaje.toUpperCase();
  divAlerta.classList.add("error");
  divAlerta.classList.add("bg-red-700");
  divAlerta.classList.add("text-white");
  divAlerta.classList.add("px-3");
  divAlerta.classList.add("py-2");
  divAlerta.classList.add("border-l-red-900");
  divAlerta.classList.add("border-l-4");
  divAlerta.classList.add("font-semibold");
  divAlerta.classList.add("text-sm");
  divAlerta.classList.add("my-2");

  padre.appendChild(divAlerta);
  setTimeout(() => {
    padre.removeChild(divAlerta);
  }, 3000);
}

