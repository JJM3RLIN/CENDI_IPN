<main class="grid place-items-center p-2">
    <h1 class="titulo font-bold text-center text-2xl md:text-3xl my-2 uppercase text-gray-600">Formulario para la ficha de inscripción-reinscripción</h1>
    <h2 class="md:text-2xl text-xl text-gray-600 mb-4">Ciclo escolar: <span class="font-bold text-red-800 ">2022-2023</span></h2>
    <div class="paginacion flex flex-col md:flex-row md:justify-center gap-2 md:items-center mb-6">
        <button data-paso="1" class="btn btnActual rounded uppercase font-medium text-white bg-red-700 px-3 mr-2 py-2 shadow-lg hover:bg-red-900"> DATOS DEL NIÑO</button>
        <button data-paso="2" class="btn uppercase rounded font-medium text-white bg-red-700 px-3 mr-2 py-2 shadow-lg  hover:bg-red-900">Datos DERECHOHABIENTE</button>
        <button data-paso="3" class="btn uppercase rounded font-medium text-white bg-red-700 px-3 mr-2 py-2 shadow-lg  hover:bg-red-900 hidden">Datos conyuge</button>
    </div>
    <form action="" method="POST" class="form bg-white p-12 rounded-md shadow-md" enctype="multipart/form-data">
        <section id="paso-1" class="mostrar font-normal">
            <div>
                <label class="text-gray-600 font-normal text-lg" for="cendi">CENDI: </label>
                <select id="cendi" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500 ">
                    <option disabled selected>--Selecciona un CENDI--</option>
                    <option value="ASC">Amelia Solórzano de Cárdenas</option>
                    <option value="CBB" disabled>Clementina Batalla de Bassols</option>
                    <option value="ESLM" disabled>Eva Sámano de López Mateos</option>
                    <option value="LPB" disabled>Laura Pérez de Bátiz</option>
                    <option value="MSE" disabled>Margarita Salazar de Erro</option>
                </select>
            </div>

            <section>
                <div class="flex justify-between items-center">
                    <div class="px-1">
                        <label class="text-gray-600 font-normal text-lg" for="boleta">Folio (boleta):</label>
                        <input placeholder="Ej. 2021630376, PE12345678, PP12345678" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="boleta">
                    </div>

                    <div class=" px-1">
                        <label class="text-gray-600 font-normal text-lg" for="grupo">Grupo:</label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="grupo">
                    </div>

                </div>

            </section>

            <div class="flex">
                <span class="mb-5 text-center font-medium flex justify-center  border rounded-full w-6 h-6 mr-3 border-red-900 text-red-900">1</span>
                <span class="text-gray-600 mb-5 text-center font-medium">DATOS DEL NIÑO O LA NIÑA</span>
            </div>
            
            <section>
                <div class="flex justify-between items-center">
                    <div class=" px-1">
                        <label class="text-gray-600 font-normal text-lg" for="Papellido">Primer Apellido:</label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="apellidoP">
                    </div>
                    <div class=" px-1">
                        <label class="text-gray-600 font-normal text-lg" for="Spellido">Segundo Apellido: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="apellidoM">
                    </div>
                </div>
            </section>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="nombre">Nombre: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="nombre">
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="fnac">Fecha de Nacimiento: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="date" id="fnac">
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="edad">Edad: </label>
                <input min='0' max='70' class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="edad">
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="CURP">CURP: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="curp">
            </div>
        </section>

        <section id="paso-2" class="ocultar">
            <div class="flex">
                <span class="mb-5 text-center font-medium flex justify-center border rounded-full w-6 h-6 mr-3 border-red-900 text-red-900">2</span>
                <span class="text-gray-600 mb-5 text-center font-medium">DATOS DEL O DE LA DERECHOHABIENTE</span>
            </div>
            <section>
                <div class="flex justify-between items-center">
                    <div class=" px-1">
                        <label class="text-gray-600 font-normal text-lg" for="pApellidoD">Primer Apellido: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="pApellidoD">
                    </div>
                    <div class="px-1">
                        <label class="text-gray-600 font-normal text-lg" for="sApellidoD">Segundo Apellido: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="sApellidoD">
                    </div>
                </div>
            </section>

            <div>
                <label class="text-gray-600 font-normal text-lg" for="nombreDE">Nombres(s): </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="nombreDE">
            </div>

            <div>
                <label for="domicilio" class="text-gray-600 font-normal text-lg">Domicilio Particular: </label>
                <textarea rows="3" class="border w-full outline-none focus:border-green-500" id="domicilio" placeholder="Calle, no.Ext, no.Int, Colonia"></textarea>
            </div>

            <div class="flex">
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="entidad"> Entidad Federativa: </label>
                    <select class="entidad block mb-4 w-full px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" id="entidad">
                        <option selected disabled>---Seleccione una opción---</option>
                    </select>
                </div>
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="alcmuni">Alcaldia o municipio: </label>
                    <select class="municipio block mb-4 w-full px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" id="alcmuni">
                        <option selected disabled>---Seleccione una opción---</option>
                    </select>
                </div>
            </div>


            <div>
                <label class="text-gray-600 font-normal text-lg" for="cp">C.P: </label>
                <input min='0' class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="cp">
            </div>
            <section>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 px-1">
                        <label class="text-gray-600 font-normal text-lg" for="tel_f">Telefono Fijo: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="tel_f">
                    </div>
                    <div class="w-1/2 px-1">
                        <label class="text-gray-600 font-normal text-lg" for="tel_c">Telefono Celular: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="tel_c">
                    </div>
                </div>
            </section>

            <div>
                <label class="text-gray-600 font-normal text-lg" for="correo">Correo Electronico: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="email" id="correo">
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="ocupacion">Ocupacion: </label> </br>
                <select id="ocupacion" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500 ">
                    <option selected disabled>---Seleccione una ocupación---</option>
                    <option value="docente">Docente</option>
                    <option value="paae">PAAE</option>
                    <option value="funcionario">Funcionario(a)</option>
                </select>
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="curpDE">CURP: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="curpDE">
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="puesto">Nombre de la plaza o puesto: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="puesto">
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="sueldo">Sueldo Mensual: </label>
                <input min='0' class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="sueldo">
            </div>

            <div class="flex">
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="nEmpleado">Numero de Empleado: </label>
                    <input min='0' maxlength='7' class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="nEmpleado">
                </div>
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="adscripcion">Adscripcion: </label>
                    <select id="tipoEscuela" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none">
                        <option selected disabled>--Selecciona una opción--</option>
                        <option value="medioSuperior">Medio superior</option>
                        <option value="superior">Superior</option>

                    </select>

                    <select class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none" id="adscripcion">
                        <option selected disabled>--Selecciona una escuela--</option>

                    </select>
                </div>
            </div>

            <div>
                <label class="text-gray-600 font-normal text-lg" for="horaTrabajo">Horario de Trabajo: </label>
                <select class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" id="horaTrabajo">
                    <option disabled selected>--Selecciona un horario--</option>
                    <option value="horario1">07:00-15:00</option>
                    <option value="horario2">08:00-15:00</option>
                    <option value="horario3">07:00-14:00</option>
                </select>
            </div>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="extencionDE">Extensión: </label>
                <input min='0' maxlength="5" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="extencionDE">
            </div>

            <div >
                <p class="text-gray-600 font-normal text-lg" for="extencionDE">Tienes conyugue?: </p>
                <div class="flex flex-col md:flex-row justify-between  md:items-center md:w-3/12">
                    <div >
                    <input id="rSi" type="radio" name="conyugue" value="si">
                    <label for="rSi">Sí</label>
                    </div>
                  <div>
                    <input id="rNo" type="radio" name="conyugue"  value="no">
                    <label for="rNo">No</label>
                  </div>
                </div>
            </div>
        </section>

        <section id="paso-3" class="ocultar">
            <div class="flex">
                <span class="mb-5 text-center font-medium flex justify-center  border rounded-full w-6 h-6 mr-3 border-red-900 text-red-900">3</span>
                <span class="text-gray-600 mb-5 text-center font-medium">DATOS DEL CONYUGE (PADRE, MADRE)</span>
            </div>


            <div class="flex">
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="pAppelidoCon">Primer Apellido: </label>
                    <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="pApellidoCon">
                </div>
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="sApellidoCon">Segundo Apellido: </label>
                    <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="sApellidoCon">
                </div>
            </div>

            <div>
                <label class="text-gray-600 font-normal text-lg" for="nombreCon">Nombre(s): </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="nombreCon">
            </div>

            <div class="flex">
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="telTrabajo">Telefono Trabajo: </label>
                    <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="telTrabajo">
                </div>
                <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="tel_fCon">Telefono: </label>
                    <input class="block w-full px-1 py-1 mb-4 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="tel_fCon">
                </div>
            </div>
            <div class="w-full px-1">
                    <label class="text-gray-600 font-normal text-lg" for="extCon">Extension: </label>
                    <input min='0' maxlength="5" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="extCon">
                </div>

            <div>
                <label class="text-gray-600  font-normal text-lg" for="lugarTrabCon">Lugar de Trabajo: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="lugarTrabCon">
            </div>

            <div>
                <label class="text-gray-600 font-normal text-lg" for="domiTrabajoCon">Domicilio de Trabajo: </label>
                <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="domiTrabajoCon">
            </div>

            

        </section>
        <div>
            <button id="validar" class="bg-red-700 rounded text-white p-2 mt-3 w-full uppercase hover:bg-red-900 hidden" type="button">Registrar</button>
            <button id="limpiar" class="bg-red-700 rounded text-white p-2 mt-3 w-full uppercase hover:bg-red-900" type="reset">Limpiar</button>
        </div>
    </form>

    <section id="resumen" class="hidden">

   <div class="grid grid-cols-1 md:grid-cols-2 place-items-center">
   <section>
   <h2>Datos del Niño</h2>
    <p>Apellido Paterno: <span class="text-indigo-800" id="apellidoPC"></span></p>
    <p>Apellido Materno: <span class="text-indigo-800" id="apellidoMC"></span></p>
    <p>Nombre: <span class="text-indigo-800" id="nombreC"></span></p>
    <p>Fecha de Nacimiento: <span class="text-indigo-800" id="fNacimientoR"></span></p>
    <p>Edad: <span class="text-indigo-800" id="edadR"></span> </p>
    <p>CURP: <span class="text-indigo-800" id="curpCR"></span> </p>
    <p>Boleta: <span class="text-indigo-800" id="boletaR"></span></p>
    <p>CENDI: <span class="text-indigo-800" id="cendiR"></span> </p>
    <p>Grupo: <span class="text-indigo-800" id="grupoR"></span> </p>
   </section>

    <section>
    <h2>Datos del DerechoHabiente</h2>
    <p>Apellido Paterno: <span class="text-indigo-800" id = "apellidoPR"></span></p>
    <p>Apellido Materno: <span class="text-indigo-800" id = "apellidoMR"></span></p>
    <p>Nombre: <span class="text-indigo-800" id = "nombreR"></span></p>
    <p>CURP: <span class="text-indigo-800" id = "curpR"></span></p>
    <p>Domicilio: <span class="text-indigo-800" id = "domicilioR"></span></p>
    <p>Entidad Federativa: <span class="text-indigo-800" id = "entidadFederativaR"></span></p>
    <p>Municipio o delegación: <span class="text-indigo-800" id = "municipioR"></span></p>
    <p>C.P: <span class="text-indigo-800" id = "cpR"></span></p>
    <p>Correo: <span class="text-indigo-800" id = "correoR"></span></p>
    <p>Teléfono celular: <span class="text-indigo-800" id = "tel_CR"></span></p>
    <p>Teléfono fijo: <span class="text-indigo-800" id = "tel_FR"></span></p>
    <p>Extensión: <span class="text-indigo-800" id = "extensionR"></span></p>
    <p>Ocupación: <span class="text-indigo-800" id = "ocupacionR"></span></p>
    <p>Adscripción: <span class="text-indigo-800" id = "adscripcionR"></span></p>
    <p>Puesto: <span class="text-indigo-800" id = "puestoR"></span></p>
    <p>Sueldo: <span class="text-indigo-800" id = "sueldoR"></span></p>
    <p>Horario de trabajo: <span class="text-indigo-800" id = "horarioTrabajoR"></span></p>
    <p>Número de empleado: <span class="text-indigo-800" id = "nEmpleadoR"></span></p>
    </section>
<section id="conyugueInfo" class="hidden">
<h2>Datos del Conyugue</h2>
    <p>Apellido Paterno: <span class="text-indigo-800" id = "apellidoPConR"></span></p>
    <p>Apellido Materno: <span class="text-indigo-800" id = "apellidoMConR"></span></p>
    <p>Nombre: <span class="text-indigo-800" id = "nombreConR"></span></p>
    <p>Domicilio: <span class="text-indigo-800" id = "domicilioConR"></span></p>
    <p>Entidad Federativa: <span class="text-indigo-800" id = "entidadFederativaConR"></span></p>
    <p>Municipio o delegación: <span class="text-indigo-800" id = "municipioConR"></span></p>
    <p>C.P: <span class="text-indigo-800" id = "cpConR"></span></p>
    <p>Teléfono: <span class="text-indigo-800" id = "tel_FConR"></span></p>
    <p>Télefono del trabajo: <span class="text-indigo-800" id = "tel_trabajoConR"></span></p>
    <p>Extensión: <span class="text-indigo-800" id = "extensionConR"></span></p>
    <p>Lugar de trabajo: <span class="text-indigo-800" id = "lugarTrabajoConR"></span></p>
    <p>Domicilio de trabajo: <span class="text-indigo-800" id = "domicilioTrabajoConR"></span></p>
 
</section>
   </div>
<div>
<button class="modificar">Modificar</button>
<button id="subirDatos" class="bg-red-700 rounded text-white p-2 mt-3 w-full uppercase hover:bg-red-900" type="button">Confirmar</button>
</div>
</section>

<section class="fotos m-3 hidden">
    
  <form action="/usuarios/fotos" method="POST" enctype="multipart/form-data" class="formFotos bg-white p-12 rounded-md shadow-md">
  <h2 class="font-bold text-2xl">Para finalizar agrega las fotos correspondientes</h2>   
  <input type="hidden" name="curp" id="curpImg">
  <input type="hidden" name="boleta" id="bolteaImg">
      <div class="mb-3">
          <label class="text-gray-600 font-semibold text-lg" for="imgChild">Foto del niño o la niña</label>
          <input class="block w-full " type="file" accept="image/jpeg, image/png" id="imgChild" name="fotoChild">
      </div>

      <div class="mb-3">
          <label class="text-gray-600 font-semibold text-lg" for="imgDerecho">Foto del DerechoHabiente</label>
          <input class="block w-full " type="file" accept="image/jpeg, image/png" id="imgDerecho" name="fotoDerecho">
      </div>
    <button type="submit">Subir fotos</button>
  </form>
</section>

</main>