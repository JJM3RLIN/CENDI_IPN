//Ponerle el evento al btn de eliminar
function eliminarRegistro(){
    const btnEliminar = document.querySelectorAll('.botonesEliminar');
    if(btnEliminar){
        btnEliminar.forEach(btn=>{
            btn.addEventListener('click', (e)=>alertaEliminarRegistro(e))
        })
    }
}

//Mandar la info al back
async function eliminar(e){
const form = new FormData();

form.append('curp', e.target.id);
try {
    const url = '/admin/eliminar';
    const resultado = await fetch(url, {
        method: 'POST',
        body: form
    } );
    const respuesta = await resultado.json();
    if(respuesta.respuestaB == '1'){
        alertaTop('Se elimino correctamente al derechoHabiente', 'success');
        //Recargar la pagina
        setTimeout(() => {
            location.href('/admin');
           }, 2000);
    }
    
} catch (error) {
    console.log(error)
}

}

//Crear alerta de que va a eliminar
function alertaEliminarRegistro(e){
    Swal.fire({
        title: 'Estas seguro de eliminar al DerechoHabiente?',
        text: "Una vez borrado no podras recuperar su información",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Eliminar'
      }).then((result) => {
        if (result.isConfirmed) {

            //Llamar a la fucnion que envia la info a back
            eliminar(e);
        }
      })
}