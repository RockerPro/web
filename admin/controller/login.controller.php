<?php
session_start();
require_once '../model/login.model.php';

if (isset($_REQUEST['user']) and isset($_REQUEST['pass'])){
    $controller = new loginController();
    call_user_func(array( $controller, 'Login'),$_REQUEST["user"],$_REQUEST["pass"]);
}else if(isset($_REQUEST['salir'])){
    $controller = new loginController();
    call_user_func(array( $controller, 'Salir'));
}else{  header('Location: ../'); }

class loginController
{    
        private $model;
        
        public function __CONSTRUCT(){
            $this->model = new loginModel();
        }

        public function __call($method, $args) 
        { 
            if(method_exists($this, $method)) { 
                return call_user_func_array(array($this, $method), $args); 
            }else{ 
                return call_user_func_array(array($this, 'Index'), $args); 
            } 
        } 

        public function Index($user,$pass){
            header('Location: ../');
        }

        public function Login($user,$pass){
            $resp = $this->model->Login(array($user,sha1($pass)));
            if ($resp[0]->res == "success") {
                $_SESSION["access"] = true;
                $_SESSION["nombre"] = $resp[0]->resul;    
                $_SESSION["rol"] = $resp[0]->rola;   
                $_SESSION["id"] =  $resp[0]->id;                   
                header('Location: ../inicio');
            }else{
                $_SESSION["msg"] = 'Usuario y/o Contraseña incorrecta';
                header('Location: ../');
            }
        }

        public function Salir(){
            unset($_SESSION["access"]);
            unset($_SESSION["nombre"]);
            unset($_SESSION["rol"]);
             unset($_SESSION["id"]);
            header('Location: ../');
        }
}