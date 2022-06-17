
<nav >
    <div class="px-10 py-3" >
        <div class="flex items-center justify-between">
            <div class="inset-y-0 left-0 flex items-center md:hidden">
                <!--Btn para el menu mobile-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="mobile-menu">
                    <img class="h-9 w-9 md:hidden" src="/images/barras.svg" alt="menu-hamburguesa">
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center  md:justify-start">

                <div class="hidden md:block">
                    <div class="flex space-x-4">
                        <a class="mr-2 font-medium hover:text-slate-200 text-2xl" href="/">Inicio</a>
                        <a class="mr-2 font-medium hover:text-slate-200 text-2xl" href="/usuarios/crear">Registrarse</a>
                        <?php echo $autenticado ? '
                        <a class="mr-2 font-medium hover:text-slate-200 text-2xl" href="/admin">Administrar</a>
                        <a href="/logout" class="font-medium hover:text-slate-200 text-2xl">Cerrar sesión</a>
                        ': '<a class="mr-2 font-medium hover:text-slate-200 text-2xl" href="/login">Iniciar Sesion</a>' ?>
                    </div>
                </div>
            </div>
          
                    <img class="h-14 w-10 md:h-16 md:w-14" src="/images/logo-poli-blanco.png" alt="logo-ipn">  
           
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