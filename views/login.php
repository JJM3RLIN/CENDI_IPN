<main class="flex flex-col h-screen md:flex-row overflow-hidden">
    <img class="w/11/12" src="/images/cendiipn.png" alt="img-login">
    <div class="flex flex-col items-center justify-center p-2 md:w-11/12">
    <?php include_once __DIR__ . '/../includes/templates/errores.php'?>
        <form class="p-12 rounded-md " method="POST" action="/login">
        
            <section class="mb-2">
                <h1 class="text-gray-600 text-center font-medium text-4xl mb-5">Iniciar sesión </h1>
                <label class="text-gray-600 font-normal text-2xl" for="usuario">Usuario: </label> 
                <input value = "<?php echo $admin->username; ?>" class="mb-7 block w-full px-1 py-1 border-b-2 text-gray-700  bg-transparent outline-none focus:border-green-500" type="text" name="usuario" id="usuario" />
            </section>

            <section class="mb-2">
                <label class="text-gray-600 font-normal text-2xl" for="password"> Contraseña: </label> 
                <input class="block w-full px-1 py-1 border-b-2 text-gray-700 outline-none focus:border-green-500 bg-transparent" type="password" name="password" id="password" /> </br>
            </section>
            <div class="flex flex-col justify-center items-center ">
                <button class=" bg-blue-600 uppercase text-lg text-gray-200 rounded hover:bg-blue-500 px-4 py-2 cursor-pointer" type="submit">Iniciar sesión</button>
            </div>
        </form>
    </div>
</main>