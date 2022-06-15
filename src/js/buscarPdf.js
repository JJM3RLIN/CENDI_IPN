const pdf = {
    nombre: ''
}
function buscarPdf(){
    const form = document.querySelector('#formPdf');
    const input = document.querySelector('#nombrePdf'); 
    if(form){
        input.addEventListener('change', (e)=>{
            pdf.nombre = e.target.value;
        })
        form.addEventListener('submit', (e)=>{
            e.preventDefault();
            if(pdf.nombre === ''){
                //Una alerta
                alerta('No has escrito una boleta', 'warning');
            }else{
               // location.href('../../generadosPdf/' + pdf.nombre + '.pdf')
                traerPdf();
            }   
        })
    }
}
async function traerPdf(){
const form = new FormData();
form.append('pdf', pdf.nombre + '.pdf');
try {
    const url = '/buscarPdfObtener';
    const peticion = await fetch(url, {
        method: 'POST',
        body: form
    })
    console.log(peticion)
    const respuesta = await peticion.json();
    console.log(respuesta)
    
} catch (error) {
    console.log(error);
}
}