<?php 

$admin = $_SESSION['usuario'];

?>
<main class="p-2">
    <h1 class="uppercase text-xl font-semibold">Bienvenido <span class="text-lime-400"><?php echo $admin ?></span></h1>
    <div class="text-center mb-5">
    <h2 class="uppercase font-bold text-2xl">Administra los derechoHabientes</h2>
    <h2 class="text-xl font-semibold">Crea, Elimina y Actualiza</h2>
    </div>
    <table class="border-collapse border-gray-400 border w-full table-auto text-center ">
        <thead class="bg-blue-400 text-white ">
         <tr>
             <th class="border border-slate-600 py-2 px-3" >Nombre Completo</th>
             <th class="border border-slate-600 py-2 px-3" >CURP</th>
             <th class="border border-slate-600 py-2 px-3" >Contacto</th>
             <th class="border border-slate-600 py-2 px-3" >Ocupación</th>
             <th class="border border-slate-600 py-2 px-3" >Puesto</th>
             <th class="border border-slate-600 py-2 px-3" >Número de empleado</th>
             <th class="border border-slate-600 py-2 px-3" >Adscripcion</th>
             <th class="border border-slate-600 py-2 px-3" >Acciones</th>
         </tr>
        </thead>
        <tbody>
           <?php foreach ($registros as  $registro): ?>
            <tr class="even:bg-gray-100">
                <td class="borderborder-slate-600 py-2 px-3" ><p><?php echo $registro->apellidoP . ' ' . $registro->apellidoM . " " . $registro->nombre ?></p></td>
                <td class="border border-slate-600 py-2 px-3" ><?php echo $registro->curp; ?></td>
                <td class="border border-slate-600 py-2 px-3 " >
                <p>Correo: <?php echo $registro->correo;?></p>
                    <p>Teléfono fijo: <?php echo $registro->tel_f; ?></p>
                    <p>Teléfono celular: <?php echo $registro->tel_c; ?></p>
                    <p>Extención: <?php echo $registro->extencion;?></p>
            </td>
            <td class="border border-slate-600 py-2 px-3" ><?php echo $registro->ocupacion; ?></td>
            <td class="border border-slate-600 py-2 px-3" ><?php echo $registro->puesto; ?></td>
            <td class="border border-slate-600 py-2 px-3" ><?php echo $registro->nEmpleado; ?></td>
            <td class="border border-slate-600 py-2 px-3" ><?php echo $registro->adscripcion; ?></td>
                <td>
                    <a class="bg-blue-600 text-white" href="/admin/actualizar?curp=<?php echo $registro->curp ?>">Actualizar</a>
                    <button type="button" id="<?php echo $registro->curp ?>" class="botonesEliminar bg-red-600 text-white py-2 px-1">Eliminar</button>  
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>