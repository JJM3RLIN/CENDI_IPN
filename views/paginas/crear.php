<main class="grid place-items-center p-2">
    <h1 class="titulo font-bold text-center text-2xl md:text-3xl my-2 uppercase text-gray-600">Formulario para la ficha de inscripción-reinscripción</h1>
    <h2 class="md:text-2xl text-xl text-gray-600 mb-4">Ciclo escolar: <span class="font-bold text-red-800 ">2022-2023</span></h2>
    <?php require __DIR__  . '/../../includes/templates/paginacion.php';?>
    <form action="" method="POST" class="form bg-white p-12 rounded-md shadow-md" enctype="multipart/form-data">
       <?php require __DIR__  . '/../../includes/templates/form.php';?>
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
<?php require __DIR__ . '../../../includes/templates/formFotos.php' ?>
  </form>
</section>

</main>