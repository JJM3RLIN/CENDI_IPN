function alerta(mensaje, tipo, texto = ''){
    Swal.fire({
        icon: tipo,
        title: mensaje,
        text: texto,
        timer: 5000
      })
}
function alertaTop(mensaje, tipo){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: tipo,
        title: mensaje
      })
}