<?php
//El proyecto de sirve desde public
if (!isset($_SESSION)) {
    session_start();
}

$autenticado = $_SESSION['login'] ?? false;
$registrado = $_GET['tipo'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/final.css">
</head>

<body class="bg-slate-50">
    <header class="bg-red-900 text-white mb-4 <?php echo $_SERVER['REQUEST_URI'] != '/login' ? 'block' : 'hidden' ?>">
    <?php include __DIR__ . '/../includes/templates/nav.php'; ?>
    </header>

    <?php echo $mostrar ?>


    <footer class="bg-black text-white mt-3 <?php echo $_SERVER['REQUEST_URI'] != '/login' ? 'block' : 'hidden' ?>">
        <p class="text-sm">Todos los derechos reservados</p>
    </footer>
    <?php echo $_SERVER['REQUEST_URI'] != '/login'? '<script src="/js/bundle.min.js"></script>' : '' ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php echo $registrado == '1'? "<script>
 function alert(mensaje){
 
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: mensaje
      }) 

 } 
 alert('Datos guardados correctamente.');
 setTimeout(()=>{
    alert('Se te envio un correo con la información sobre la inscripción.');
 }, 3000);
    </script>"  : '' ?>
</body>

</html>