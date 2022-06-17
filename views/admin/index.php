<?php 

$admin = $_SESSION['usuario'];

?>
<main class="p-2">
    <h1 class="uppercase text-xl font-semibold">Bienvenido <span class="text-amber-700"><?php echo $admin ?></span></h1>
    <div class="text-center mb-5">
    <h2 class="uppercase font-bold text-2xl">Administra los derechoHabientes</h2>
    <h2 class="text-xl font-semibold">Crea, Elimina y Actualiza</h2>
    </div>
    <table class="border-collapse border-orange-700 border w-full table-auto text-center  ">
        <thead class="bg-amber-600 text-white ">
         <tr>
             <th class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" >Nombre Completo</th>
             <th class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" >CURP</th>
             <th class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" >Número empleado</th>
             <th class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" >Adscripcion</th>
             <th class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" >Acciones</th>
         </tr>
        </thead>
        <tbody>
        <?php foreach ($registros as  $registro): ?>
            <tr class="border-orange-700">
                <td class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs " ><p><?php echo $registro->apellidoP . ' ' . $registro->apellidoM . " " . $registro->nombre ?></p></td>
                <td class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs " ><?php echo $registro->curp; ?></td>
            <td class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" ><?php echo $registro->nEmpleado; ?></td>
            <td class="border border-orange-700 md:py-2 md:px-3 md:text-lg p-1 text-xs" ><?php echo $registro->adscripcion; ?></td>
                <td class="border border-orange-700 py-1 grid grid-cols-1 md:grid-cols-3 place-items-center gap-2>
                    <div class="grid place-items-center gap-3">
                    <a class="p-1 mb-1 bg-cyan-500 text-white hover:drop-shadow-xl rounded-lg ease-in-out duration-300 hover:bg-cyan-600" href="/admin/ver?curp=<?php echo $registro->curp ?>">
                    <img class=" h-6 w-6 md:h-10 md:w-10" src="/images/ver.png" alt="icono-ver" ></a>
                    <a class="p-1 mb-1 bg-blue-600 text-white hover:drop-shadow-xl rounded-lg ease-in-out duration-300 hover:bg-blue-800" href="/admin/actualizar?curp=<?php echo $registro->curp ?>">
                    <img class=" h-6 w-6 md:h-10 md:w-10" src="/images/edit.png" alt="icono-actualizar" > </a>
                    <button type=" button" id="<?php echo $registro->curp ?>" class="botonesEliminar p-1 mb-1 rounded-lg bg-red-600 text-white hover:drop-shadow-xl ease-in-out duration-300 hover:bg-red-800">
                    <img class="h-6 w-6 md:h-10 md:w-10"src="/images/delete.png" alt="icono-eliminar" >
                    </button>  
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>