<main class="grid place-items-center p-2">
    <h1 class="font-bold text-center text-2xl md:text-3xl my-2 uppercase text-gray-600">Actualiza la información del DerechoHabiente</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-0 my-4">
        <button id="btnDatos" class="text-white bg-amber-600 border border-amber-600 hover:bg-amber-600 hover:text-white text-xl font-bold transition-all  ease-in-out px-2 py-3" type="button">Actualizar información</button>
        <button id="btnFotos" class="text-orange-700 bg-transparent border border-orange-700 hover:bg-orange-700 hover:text-white text-xl font-bold transition-all  ease-in-out px-2 py-3" type="button">Actualizar fotos</button>
    </div>
    <?php require __DIR__ . '/../../includes/templates/paginacion.php'; ?>
    <form action="/admin/actualizar" method="POST" id="datosActualizar" class="formActualizar bg-white p-12 rounded-md shadow-md" enctype="multipart/form-data">
<?php require __DIR__ . '/../../includes/templates/form.php'; ?>
        <button class="bg-red-700 rounded text-white p-2 mt-3 w-full uppercase hover:bg-red-900 font-bold" type="submit">Actualizar</button>
    </form>

    <form action="/admin/actualizar/fotos" method="POST" class="hidden bg-white p-12 rounded-md shadow-md" id="fotosActualizar" enctype="multipart/form-data">
        <?php require __DIR__ . '../../../includes/templates/formFotos.php' ?>
        <button class="bg-red-800 cursor-pointer px-3 py-2 hover:bg-red-900 text-white font-bold w-full mt-3 text-xl" type="submit">Actualizar fotos</button>
    </form>
</main>