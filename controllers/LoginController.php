<?php
namespace Controllers;
use MVC\Router;
use Models\Admin;

class LoginController{
    public static function login(Router $router){

     $admin = new Admin;   
     $errores = Admin::LimpiarErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $admin = new Admin($_POST);

            //Obtenemos los errores (en caso de que se tengan)
           $errores = $admin->errores();
echo $errores;
           if(empty($errores)){
               //Verificar que el usuario exista
               $auten = $admin->existeUsuario();
               if(!$auten){
                   //Obtenemos el error de que no esta registrado
                   $errores = Admin::getErrores();
               }else{
                   //Comprobar la contraseña
                   $autenticado = $admin->comprobarPassword($auten);
                   if($autenticado){

                    //Inicamos la sesion
                       $admin->autenticar();
                      
                   }else{
                       $errores = Admin::F();
                   }
               }
               
           }
        }
     //Renderizamos la vista, sin la / pq ya la tiene el router
     $router->render('login', [
         'errores' => $errores,
         'admin' => $admin
     ]);

        
    }

    public static function logout(Router $router){
        session_start();
        $_SESSION = [];
        session_destroy();
        //Redireccionamos a pagina principal y cerramos su sesion
        header('Location: /');
    }
}