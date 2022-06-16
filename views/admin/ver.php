
<main class="p-2">

<section class="bg-white p-12 rounded-md shadow-md">

<div class="flex justify-evenly flex-col md:flex-row gap-6 opacity-100 ">
<section>
<h2>Datos del Niño</h2>
 <p>Apellido Paterno: <span class="text-indigo-800"><?php echo $child->apellidoP ?></span></p>
 <p>Apellido Materno: <span class="text-indigo-800" <?php echo $child->apellidoM ?>></span></p>
 <p>Nombre: <span class="text-indigo-800" ><?php echo $child->nombre ?></span></p>
 <p>Fecha de Nacimiento: <span class="text-indigo-800" ></span></p>
 <p>Edad: <span class="text-indigo-800" ><?php echo $child->edad ?></span> </p>
 <p>CURP: <span class="text-indigo-800" ><?php echo $child->curp ?></span> </p>
 <p>Boleta: <span class="text-indigo-800" ><?php echo $child->boleta ?></span></p>
 <p>CENDI: <span class="text-indigo-800" ><?php echo $child->cendi ?></span> </p>
 <p>Grupo: <span class="text-indigo-800" ><?php echo $child->grupo ?></span> </p>
 <p>Foto: </p>
 <img src=<?php echo "/fotos/" . $child->foto ?> alt="foto del niño">
</section>

 <section>
 <h2>Datos del DerechoHabiente</h2>
 <p>Apellido Paterno: <span class="text-indigo-800"><?php echo $derecho->apellidoP ?></span></p>
 <p>Apellido Materno: <span class="text-indigo-800" ><?php echo $derecho->apellidoM ?></span></p>
 <p>Nombre: <span class="text-indigo-800" ><?php echo $derecho->nombre ?></span></p>
 <p>CURP: <span class="text-indigo-800" ><?php echo $derecho->curp ?></span></p>
 <p>Domicilio: <span class="text-indigo-800" ><?php echo $derecho->domicilio ?></span></p>
 <p>Entidad Federativa: <span class="text-indigo-800" ><?php echo $derecho->entidadFederativa ?></span></p>
 <p>Municipio o delegación: <span class="text-indigo-800" ><?php echo $derecho->municipio ?></span></p>
 <p>C.P: <span class="text-indigo-800" ><?php echo $derecho->cp ?></span></p>
 <p>Correo: <span class="text-indigo-800" ></span><?php echo $derecho->correo ?></p>
 <p>Teléfono celular: <span class="text-indigo-800" ><?php echo $derecho->tel_c ?></span></p>
 <p>Teléfono fijo: <span class="text-indigo-800"><?php echo $derecho->tel_f ?></span></p>
 <p>Extensión: <span class="text-indigo-800"><?php echo $derecho->extencion ?></span></p>
 <p>Ocupación: <span class="text-indigo-800" ><?php echo $derecho->ocupacion ?></span></p>
 <p>Adscripción: <span class="text-indigo-800"><?php echo $derecho->adscripcion ?></span></p>
 <p>Puesto: <span class="text-indigo-800"><?php echo $derecho->puesto ?></span></p>
 <p>Sueldo: <span class="text-indigo-800"><?php echo $derecho->sueldo ?></span></p>
 <p>Horario de trabajo: <span class="text-indigo-800" ><?php echo $derecho->horarioTrabajo ?></span></p>
 <p>Número de empleado: <span class="text-indigo-800" ><?php echo $derecho->nEmpleado ?></span></p>
 <p>Foto: </p>
 <img src=<?php echo "../fotos/" . $derecho->foto ?> alt="foto del derechoHabiente">
 
</section>
<section  class="<?php !isset($conyu) ? 'hidden' : 'block' ?>">
<h2>Datos del Conyugue</h2>
 <p>Apellido Paterno: <span class="text-indigo-800"><?php echo $conyu->apellidoP ?></span></p>
 <p>Apellido Materno: <span class="text-indigo-800"><?php echo $conyu->apellidoM ?></span></p>
 <p>Nombre: <span class="text-indigo-800"><?php echo $conyu->nombre ?></span></p>
 <p>Domicilio: <span class="text-indigo-800" ><?php echo $conyu->domicilio ?></span></p>
 <p>Entidad Federativa: <span class="text-indigo-800" ><?php echo $conyu->entidadFederativa ?></span></p>
 <p>Municipio o delegación: <span class="text-indigo-800"><?php echo $conyu->municipio ?></span></p>
 <p>C.P: <span class="text-indigo-800"><?php echo $conyu->cp ?></span></p>
 <p>Teléfono: <span class="text-indigo-800" ><?php echo $conyu->telefono ?></span></p>
 <p>Télefono del trabajo: <span class="text-indigo-800"><?php echo $conyu->telTrabajo ?></span></p>
 <p>Extensión: <span class="text-indigo-800"><?php echo $conyu->extencion ?></span></p>
 <p>Lugar de trabajo: <span class="text-indigo-800" ><?php echo $conyu->lugarTrabajo ?></span></p>
 <p>Domicilio de trabajo: <span class="text-indigo-800" ><?php echo $conyu->domicilioTrabajo ?></span></p>
 <p>Foto: </p>
 <img src="/../../fotos/cendi2.jpg"  alt="foto del conyugue">
</section>
</div>

</section>
</main>