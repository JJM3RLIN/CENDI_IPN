<main class="grid place-items-center p-2">
    <h1 class="font-bold text-center text-2xl md:text-3xl my-2 uppercase text-gray-600">Actualiza la información del DerechoHabiente</h1>
    <?php require __DIR__ . '/../../includes/templates/paginacion.php'; ?>
    <form action="/admin/actualizar" method="POST" class="formActualizar bg-white p-12 rounded-md shadow-md" enctype="multipart/form-data">
<?php require __DIR__ . '/../../includes/templates/form.php'; ?>
        <button class="bg-red-700 rounded text-white p-2 mt-3 w-full uppercase hover:bg-red-900 font-bold" type="submit">Actualizar</button>
    </form>
</main>