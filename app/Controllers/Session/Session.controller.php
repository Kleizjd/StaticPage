
<?php

use function PHPSTORM_META\type;

@session_start();
include_once "../../config/connection.php";

class Session extends connection {


    public function createSession(){
        extract($_POST);
        $answer = array();
        $sqlUser = "SELECT * FROM usuario WHERE correo = '$user' AND contrasena = '$password'";
        $sql = $this->consult($sqlUser);
        if($sql != null){
            
            $answer['typeAnswer'] = "success";
        }
        echo json_encode($answer);
    }


    
    public function recoverPassword(){
     
    }
    public function registerUser() {
        extract($_POST);
       $answer = array();
       
       if($password == $passwordVerify){
            $sqlRegister ="INSERT INTO usuario (id_persona,correo, contrasena, id_rol, nombres, apellidos) VALUES ( null,'$inputEmail', '$password' ,  1, '$firstName', '$lastName' )";
            $sql = $this->execute($sqlRegister);
            if($sql != null){
             $answer['typeAnswer'] = "success";

            }
       }
       echo json_encode($answer);
    }

    public function closeSession() {
        @session_unset();
        @session_destroy();
    }
}