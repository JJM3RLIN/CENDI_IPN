
//funcion para ocultar y mostrar partes del formulario
let paso = 1;
function formulario() {
  const btnValidar = document.querySelector('#validar');
 
  //Es poque el formulario ya se muestra
    if(btnValidar){
      btnValidar.addEventListener('click', ()=>validarForm())

      //Guardar los datos de los input
      guardarInfoChild();
      guardarInfoDerecho();
      guardarInfoConyugue();
      LimpiarInfo();
    }
  
  const botones = document.querySelectorAll(".btn");

  botones.forEach((btn) => {
   
    btn.addEventListener("click", (e) => {
      //Seleccionamos el paso para cambiar seccion
      paso = e.target.dataset.paso;
      mostrarSeccion();
    });
  });
}
function mostrarSeccion() {
  const seccionMostrar = document.querySelector(`#paso-${paso}`);
  //btn a resaltar
  const btnActual = document.querySelector(".btnActual");
  //btn al que se le dio click
  const click = document.querySelector(`[data-paso="${paso}"]`);
  //Seleccionamos el que se mostraba y lo ocultamos
  const seccionAnt = document.querySelector(".mostrar");
  if (seccionAnt) {
      //ocultamos
    seccionAnt.classList.remove("mostrar");
    seccionAnt.classList.add("ocultar");
  }
  //Mostramos
  seccionMostrar.classList.add("mostrar");
  seccionMostrar.classList.remove("ocultar");

  //Resaltar btn
  btnActual.classList.remove("btnActual");
  click.classList.add("btnActual");
}
async function agregarEstados() {
  //Pedimos los estados
  const url = "/mexico";
  const respuesta = await fetch(url);
  const datos = await respuesta.json();
  //consulta a los municipios
  const urlMunicipios = "/mexico/municipios";
  const peticion = await fetch(urlMunicipios);
  const resultado = await peticion.json();
  //Seleccionamos el select
  const padre = document.querySelector(".entidad");
   if(padre){
    datos.forEach((estado) => {
      const opcion = document.createElement("OPTION");
      opcion.textContent = estado;
      opcion.value = estado
      padre.appendChild(opcion);

    });
   
     //Aparecer los municipios
     padre.addEventListener("change", (e) =>
     colcocarMunicipios(resultado[e.target.value])
   );
   }
   
}

async function colcocarMunicipios(municipios) {
  //El padre es el contenedor de los option
  const padre = document.querySelector(".municipio");

 
    //Limpiamos al padre
    padre.innerHTML = "<option disabled selected>---Seleccione una opción---</option>";
    municipios.forEach((municipio) => {
      //Limpiamos al padre
      //se crea una etiqueta de option
      const opcion = document.createElement("OPTION");
      //de texto le añadimos el nombre del municipio
      opcion.textContent = municipio;

      //el valor que se envia a la db
      opcion.value = municipio;

      //Lo agregamos en el padre
      padre.appendChild(opcion);
    });
  
}
  async function agregarEscuelas(){
  const url = "/escuelas";
  const respuesta = await fetch(url);
  const resultado = await respuesta.json();
  const selectTipoEscuela = document.querySelector('#tipoEscuela');
 if(selectTipoEscuela){
  selectTipoEscuela.addEventListener('change', (e)=>{
    crearOptionEscuela(resultado[e.target.value]);
      })
 }
}
function crearOptionEscuela(escuelas ){
  const select = document.querySelector('#adscripcion');
  
  //Limpio el select
  select.innerHTML = "<option selected disabled>---Seleccione una escuela---</option>";

  
  escuelas.forEach(escuela =>{
    const option =  document.createElement('OPTION');
    
    option.value =  escuela; 
     
    option.textContent = escuela;
    select.appendChild(option);
  });
 
}

function mostrarConyugue(){
  const opciones = document.querySelectorAll('input[name="conyugue"]');
  const btnCon = document.querySelector("[data-paso='3']");
  const infoConyugue = document.querySelector("#conyugueInfo");
  const btnEnviarInfo =document.querySelector('#validar');
  opciones.forEach(input=>{
    input.addEventListener('click', e=>{

      if(btnEnviarInfo){
        //Mostramos el boton de registrar sun importar el resultado
      btnEnviarInfo.classList.remove('hidden');
      }
      if(e.target.value === 'si'){

        //Mostrar o no la info del conyugue
         btnCon.classList.remove('hidden');
         if(infoConyugue){
         infoConyugue.classList.remove('hidden');
           //Crear la foto para el conyuge
           mostrarFotoConyugue();
         }
      }else{
        btnCon.classList.add('hidden');
        infoConyugue.classList.add('hidden');
        const formFotos = document.querySelector('.formFotos');
       const div = document.createElement('DIV');
     div.innerHTML = `<button type="submit">Subir fotos</button>`;
     formFotos.appendChild(div);
      }
      
    })
  })

}
function mostrarFotoConyugue(){
  const formFotos = document.querySelector('.formFotos');
  const div = document.createElement('DIV');
  div.innerHTML = ` <label class="text-gray-600 font-semibold text-lg" for="imgCon">Foto del Conyugue</label>
  <input class="block w-full " type="file" accept="image/jpeg, image/png" id="imgCon" name="fotoCon">
  <button type="submit">Subir fotos</button>
  `;
  formFotos.appendChild(div);
}