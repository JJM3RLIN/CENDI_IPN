document.addEventListener("DOMContentLoaded", () => {

    //Esperar a que cargue el html

    //Validaciones y select
    formulario();
    agregarEstados();
    agregarEscuelas();
    mostrarConyugue();
    traerGrupos();
    //Menu responsive
    mobileMenu();

    //Eliminar registros
    eliminarRegistro();
    actualizarRegistro();
    tipoActualizacion();

    //buscar pdf
    buscarPdf();
 

  });
