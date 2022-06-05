<?php foreach ($errores as $error) : ?>

    <div class="error w-3/5 text-white uppercase font-bold mb-2 bg-red-600 border-l-4 px-4 py-2 border-l-red-900">
        <?php echo $error; ?>
    </div>

<?php endforeach; ?>