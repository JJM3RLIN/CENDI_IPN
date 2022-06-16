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
                <div class="flex justify-between items-center flex-col md:flex-row">
                    <div class=" w-full px-1">
                        <label class="text-gray-600 font-normal text-lg" for="boleta">Folio (boleta):</label>
                        <input placeholder="Ej. 2021630376, PE12345678, PP12345678" class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="boleta">
                    </div>

                    <div class="w-full px-1">
                        <label class="text-gray-600 font-normal text-lg" for="grupo">Grupo:</label>
                        <select class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" id="grupo">
                        <option selected disabled>--Selecciona una grupo--</option>
                         </select>   
                    </div>

                </div>

            </section>

            <div class="flex">
                <span class="mb-5 text-center font-medium flex justify-center  border rounded-full w-6 h-6 mr-3 border-red-900 text-red-900">1</span>
                <span class="text-gray-600 mb-5 text-center font-medium">DATOS DEL NIÑO O LA NIÑA</span>
            </div>
            
            <section>
                <div class="flex justify-between items-center flex-col md:flex-row">
                    <div class="w-full px-1">
                        <label class="text-gray-600 font-normal text-lg" for="Papellido">Primer Apellido:</label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="apellidoP">
                    </div>
                    <div class="w-full px-1">
                        <label class="text-gray-600 font-normal text-lg" for="Spellido">Segundo Apellido: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="apellidoM">
                    </div>
                </div>
            </section>
            <div>
                <label class="text-gray-600 font-normal text-lg" for="nombre">Nombre(s): </label>
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
                <div class="flex justify-between items-center flex-col md:flex-row">
                    <div class="w-full px-1">
                        <label class="text-gray-600 font-normal text-lg" for="pApellidoD">Primer Apellido: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="text" id="pApellidoD">
                    </div>
                    <div class="w-full px-1">
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

            <div class="flex justify-between items-center flex-col md:flex-row">
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
                <div class="flex justify-between items-center flex-col md:flex-row">
                    <div class="w-full px-1">
                        <label class="text-gray-600 font-normal text-lg" for="tel_f">Telefono Fijo: </label>
                        <input class="block w-full mb-4 px-1 py-1 border rounded-xl text-gray-700 focus:outline-none focus:border-green-500" type="number" id="tel_f">
                    </div>
                    <div class="w-full px-1">
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

            <div class="flex justify-between items-center flex-col md:flex-row">
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
                    <option value="07:00-15:00">07:00-15:00</option>
                    <option value="08:00-15:00">08:00-15:00</option>
                    <option value="07:00-14:00">07:00-14:00</option>
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


            <div class="flex justify-between items-center flex-col md:flex-row">
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

            <div class="flex justify-between items-center flex-col md:flex-row">
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

