
<?php

// use function PHPSTORM_META\type;

@session_start();
include_once "../Controllers/Utilities/Utilities.controller.php";
include_once "../../config/connection.php";

class Session extends connection {


    public function createSession(){
        extract($_POST);
        $answer = array();
        $sqlUser = "SELECT id_rol, correo, contrasena, CONCAT(nombres, ' ', apellidos) AS nombre_completo FROM usuario WHERE correo = '$user' ";
        $sql = $this->execute($sqlUser);
        
            if(mysqli_num_rows($sql) != 0){
                $row = $sql->fetch_assoc();
                $passwordDB = $row['contrasena'];
              
                if (password_verify($password, $passwordDB)) {

                    $_SESSION['nombre_completo'] = str_replace("*", "", $row['nombre_completo']);
                    $_SESSION['rol_usuario'] = $row['id_rol'];
                    $_SESSION['correo_login'] = $row['correo'];
                    $answer['typeAnswer'] = true;
                }
            } else {
                $answer['typeAnswer'] = false;
            }
        echo json_encode($answer);
    }


    
   
    public function registerUser() {
        extract($_POST);
       $answer = array();
       
       if($password == $passwordVerify){
          
            $utilities = new Utilities();$passEncrypt = $utilities->encriptPassword($password,10,22);//password encripted
            

            $sqlRegister ="INSERT INTO usuario (id_persona,correo, contrasena, id_rol, nombres, apellidos) VALUES ( null,'$inputEmail', '$passEncrypt' ,  2, '$firstName', '$lastName' )";
            $sql = $this->execute($sqlRegister);
            if($sql != null){
             $answer['typeAnswer'] = true;

            }
       } else {
            $answer['typeAnswer'] = false;
       }
       echo json_encode($answer);
    }
    public function recoverPassword(){
        // var_dump($_POST);
        $obtain = $this->getConnection();
        $correo = $obtain->real_escape_string($_POST["email_user"]);
        $answer = array();
        // echo "SELECT contrasena FROM usuario WHERE correo = '$correo' ";
        $sql = $this->execute("SELECT contrasena FROM usuario WHERE correo = '$correo' ");

        if ($sql->num_rows == 1) {
            $fila = $sql->fetch_assoc();
            $contrabd = $fila['contrasena'];
            $sql = $this-> execute("UPDATE usuario SET codigo_recuperacion = '". md5($contrabd) . "' WHERE correo = '$correo' ");
   
			$link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?ptk=".md5($contrabd)."&p2=".$correo;


            //Envío del email
            $asunto = "Recuperación de Contraseña";
            $mens_email = file_get_contents("../../views/Session/correo.html");
            $mens_email = str_replace("<ENLACE>", $link, $mens_email);
            $cabecera = "MIME-Version: 1.0" . "\r\n" ."Content-type:text/html;charset=UTF-8" . "\r\n" ."From: jose.jdgo97@gmail.com" . "\r\n" ."Reply-To: jose.jdgo97@gmail.com" . "\r\n" ."X-Mailer: PHP/" . phpversion();

            mail($correo, $asunto, $mens_email, $cabecera);
          
            $answer["typeAnswer"] = true;
            $answer["link"]= $link;
        } else {
            $answer["typeAnswer"] = false;
        }
        // echo json_encode($answer);
        // echo json_encode($answer);
        
     }
    public function loadImageUser() {
        extract($_POST);
        $answer = array();
        
        $ruta = "../../views/Admin/Files/";
        $sqlUser = "SELECT imagen_usuario FROM usuario WHERE correo = '$userId' ";
        $User = $this->execute($sqlUser);
        $row = $User->fetch_assoc();
        // $answer['imagen_usuario'] = $ruta." ".$row['imagen_usuario'];
        $answer["address"] = $row['imagen_usuario'];
        // $answer = $row['imagen_usuario'];
        // $answer = "../../views/Admin/Files/".$row['imagen_usuario'];
        // var_dump($answer);
        // echo $User;
        echo json_encode($answer);
    }
    public function closeSession() {
        @session_unset();
        @session_destroy();
        // echo json_encode(array("typeAnswer" => "success"));

        
    }
}