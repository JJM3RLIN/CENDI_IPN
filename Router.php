<?php
namespace MVC;
class Router {
    public $rutasGet = [];
    public $rutasPost = [];

  //Agregando las url´s que se visitaran
    public function get($url, $fn){
        $this->rutasGet[$url] = $fn;
    }
    public function post($url, $fn){
        $this->rutasPost[$url] = $fn;
    }

    //Comprobar que la ruta que se visite exista
    public function comprobarRutas(){

        session_start();
        
        //Obtenemos si el usuario se ah autenticado
        $aute = $_SESSION['login'] ?? null;

        //Obtenemos la url en donde nos encomtremos
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        //Obtener que metodo ejecuta esa url (POST o GET)
        $metodo = $_SERVER['REQUEST_METHOD'];

        //Rutas protegitas
        $protegidas = ['/admin',' /admin/actualizar', '/admin/eliminar', 'admin/ver'];

        if( $metodo === 'POST'){
            //Obtengo la fn que ejecuta esa ruta
           $fn = $this->rutasPost[$urlActual] ?? NULL;

        }else{
            $fn = $this->rutasGet[$urlActual] ?? NULL;
        }
        //Si no esta registrado lo mandamos a la pagina principal
        if(in_array( $urlActual ,$protegidas) && !$aute){
            
            header('Location: /');
        }
        

        //Si existe la funcion la llamo para que renderice y ejecute
        if( $fn ){
            //Se pasa todo el router para tener el metodo de renderizar
            //esta funcion nos sirve para llamar a una funcion que aun no sabemos cual sera
            call_user_func($fn, $this);
        }


    }

    //Renderizar las vistas
    public function render($view, $datos = []){

        //Creo las variables de los datos traidos

        //Las variables creadas se inyectaran directamente
        foreach($datos as $key => $value){

            //de la llave se crea una variable
            $$key = $value;
        }

        //Iniciamos almaccenamienrto de memoria
        ob_start();

        //se guarda como string
        include __DIR__ . "/views/$view.php";

        //Limpio la memoria y obtengo lo que guarde en el bufer
        $mostrar = ob_get_clean();

        //Mostrar se inyectara directamente en views
        include __DIR__ . '/views/layout.php';


    }
}