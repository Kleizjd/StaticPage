
<?php

// use function PHPSTORM_META\type;

@session_start();
include_once "../../config/connection.php";

class Session extends connection {


    public function createSession(){
        extract($_POST);
        $answer = array();
        $sqlUser = "SELECT id_rol, correo, CONCAT(nombres, ' ', apellidos) AS Nombre_Completo FROM usuario WHERE correo = '$user' AND contrasena = '$password'";
        $sql = $this->execute($sqlUser);
        
            $row = $sql->fetch_assoc();
            // var_dump($sql);
            if(mysqli_num_rows($sql) != 0){
                $_SESSION['Nombre_Completo'] = str_replace("*", "", $row['Nombre_Completo']);
                $_SESSION['rol_usuario'] = $row['id_rol'];
                $_SESSION['correo_login'] = $row['correo'];
                $answer['typeAnswer'] = true;
            } else {
                $answer['typeAnswer'] = false;
            }
        echo json_encode($answer);
    }


    
    public function recoverPassword(){
     
    }
    public function registerUser() {
        extract($_POST);
       $answer = array();
       
       if($password == $passwordVerify){
            $sqlRegister ="INSERT INTO usuario (id_persona,correo, contrasena, id_rol, nombres, apellidos) VALUES ( null,'$inputEmail', '$password' ,  2, '$firstName', '$lastName' )";
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
        // echo json_encode(array("typeAnswer" => "success"));

        
    }
}