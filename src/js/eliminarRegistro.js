function eliminarRegistro(){
    const btnEliminar = document.querySelectorAll('.botonesEliminar');
    if(btnEliminar){
        btnEliminar.forEach(btn=>{
            btn.addEventListener('click', (e)=>eliminar(e))
        })
    }
}
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
    
} catch (error) {
    console.log(error)
}

}