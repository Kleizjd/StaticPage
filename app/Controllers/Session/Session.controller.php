
<?php
@session_start();
include_once "../../config/connection.php";

class Session extends connection {


    public function createSession(){
        $sqlUser = "SELECT * FROM usuario";
        $sql = $this->execute($sqlUser);
        
    }


    
    public function recoverPassword(){
     
    }
    public function registerUser() {
        extract($_POST);
       $answer = array();
       
       if($password == $passwordVerify){
            $sqlRegister ="INSERT INTO user (correo, contrasena, codigo_persona, id_rol) VALUES ( '$correo', '$password' , null, 1  )";
            $sql = $this->execute($sqlRegister);

       }

    }

    public function closeSession() {
        @session_unset();
        @session_destroy();
    }
}