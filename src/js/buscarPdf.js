const pdf = {
    nombre: '',
    curp: ''
}
function buscarPdf(){
    const form = document.querySelector('#formPdf');
    const input = document.querySelector('#nombrePdf'); 
    const inputCurp = document.querySelector('#curpPdf');
    if(form){
        input.addEventListener('change', (e)=>{
            const regexBoleta = /[PP | PE | 2021][0-9]{8}/;
            if (!regexBoleta.test(e.target.value)) {
                mostrarAlertErrorCampo(
                  "Formato invalido de la boleta",ne.target.parentElement);
              } else {
                pdf.nombre = e.target.value; 
              }
           
        })
        inputCurp.addEventListener('change', (e)=>{
            if(!validarCurp(e.target.value)){
                mostrarAlertErrorCampo("Formato de CURP no valido", e.target.parentElement);
            }else{
                pdf.curp = e.target.value;
            }
            
        })
        form.addEventListener('submit', (e)=>{
            e.preventDefault();
            if(pdf.nombre === ''  || pdf.curp === ''){
                //Una alerta
                alerta('Ambos campos son obligatorios', 'warning');
            }else{
                traerPdf();
            }   
        })
    }
}
async function traerPdf(){
const form = new FormData();
form.append('pdf', pdf.nombre );
form.append('curp', pdf.curp );
try {
    const url = '/buscarPdfObtener';
    const peticion = await fetch(url, {
        method: 'POST',
        body: form
    })
    console.log(peticion)
    const respuesta = await peticion.json();
    if(respuesta.tipo === 'succes'){
        alerta(respuesta.mensaje, respuesta.tipo);
    }else{
        alerta(respuesta.mensaje, respuesta.tipo);
    }
    
} catch (error) {
    console.log(error);
}
}