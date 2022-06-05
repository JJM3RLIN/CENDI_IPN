
<nav>
    <div class="py-2 px-4">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!--Btn para el menu mobile-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="mobile-menu">
                    <img class="h-6 w-6 md:hidden" src="/images/barras.svg" alt="menu-hamburguesa">
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center  md:justify-start">

                <div class="hidden md:block">
                    <div class="flex space-x-4">
                        <a class="mr-2 font-medium hover:text-slate-200 text-lg" href="/">Inicio</a>
                        <a class="mr-2 font-medium hover:text-slate-200 text-lg" href="/usuarios/crear">Registrarse</a>
                        <?php echo $autenticado ? '
                        <a class="mr-2 font-medium hover:text-slate-200 text-lg" href="/admin">Administrar</a>
                        <a href="/logout" class="font-medium hover:text-slate-200 text-lg">Cerrar sesión</a>
                        ': '<a class="mr-2 font-medium hover:text-slate-200 text-lg" href="/login">Iniciar Sesion</a>' ?>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0">
                    <img class="h-8 w-8 md:h-14 md:w-14" src="/images/logo_escom.png" alt="logo-escom">  
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="md:hidden hidden" id="mobile-menu-drop">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a class="mr-2 block px-3 py-2 rounded-md font-medium hover:text-slate-200 text-lg hover:bg-gray-700" href="/">Inicio</a>
            <a class="mr-2 block px-3 py-2 rounded-md font-medium hover:text-slate-200 text-lg hover:bg-gray-700" href="/usuarios/crear">Registrarse</a>
            <?php echo $autenticado ? '
                        <a class="mr-2 block px-3 py-2 rounded-md font-medium hover:text-slate-200 text-lg hover:bg-gray-700" href="/admin">Administrar</a>
                        <a href="/logout" class="fmr-2 block px-3 py-2 rounded-md font-medium hover:text-slate-200 text-lg hover:bg-gray-700">Cerrar sesión</a>
                        ': '<a class="mr-2  px-3 py-2 font-medium hover:text-slate-200 text-lg" href="/login">Iniciar Sesion</a>' ?>
        </div>
    </div>
</nav>