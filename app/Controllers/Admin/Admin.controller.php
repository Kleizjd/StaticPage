<?php
@session_start();
include_once "../../app/Controllers/Utilities/Utilities.controller.php";
include_once "../../config/connection.php";

class Admin extends connection
{
    public function viewAcount()
    {
        extract($_POST);
        // echo 'miremos '.$userId;
        $ruta = "../../views/Admin/Files/";
        $sqlAdmin = "SELECT * FROM usuario WHERE correo = '$userId' ";
        $Admin = $this->execute($sqlAdmin);

        include_once "../../views/Admin/view.Admin.php";
    }
    public function editEmail()
    {
        extract($_POST);
        $obtain = $this->getConnection();
        $answer = array();
        $upDateEmail = $obtain->real_escape_string($_POST["upDateEmail"]);
        // var_dump($_POST);
        $sql = "UPDATE usuario SET correo = '$upDateEmail' WHERE correo ='$email'";
        $sqlEmail = $this->execute($sql);

        if ($sqlEmail != 0) {
            unset($_SESSION['correo_login']);
            $_SESSION['correo_login'] = $upDateEmail;
            $answer['typeAnswer'] = "success";
        }
        echo json_encode($answer);
    }
    public function editName()
    {
        extract($_POST);

        $sql = "UPDATE usuario SET nombres = '$names', apellidos = '$lastName' WHERE correo = '$correo' ";
        $sqlUser = $this->execute($sql);

        if (mysqli_num_rows($sqlUser) != 0) {
            $nombre_completo = $nombres." ".$apellidos;
            unset($_SESSION['nombre_completo']);

            $_SESSION['nombre_completo'] = str_replace("*", "", $nombre_completo);

            echo json_encode(array('typeAnswer' => true));
        }
        
    }

    public function editAcount()
    {
        extract($_POST);
        $typeAnswer = "error";
        $message = "la contrasena actual no es correcta";

        $sqlVerify = "SELECT contrasena FROM usuario WHERE correo = '$email'";
        $sql = $this->execute($sqlVerify);

        if (mysqli_num_rows($sql) != 0) {
            $row = $sql->fetch_assoc();
            $password = $row['contrasena'];
            if (password_verify($actual_password, $password)) {

                if ($new_password == $confirm_password) {

                    $utilities = new Utilities();
                    $passEncrypt = $utilities->encriptPassword($new_password, 10, 22); //new_password encripted

                    $sqlUpdate = "UPDATE usuario SET contrasena ='$passEncrypt' WHERE correo ='$email'";

                    $sql = $this->execute($sqlUpdate);
                    if ($sql != 0) {
                        $typeAnswer = "success";
                        $message = "Cambio de contraseña exitoso";
                    }
                } else {
                    $typeAnswer = "warning";
                    $message = " las contraseñas no coiciden";
                }
            }
        }
        echo json_encode(array("typeAnswer" => $typeAnswer, "message" => $message));
    }

    public function uploadImage()
    {
        $answer = array();
        extract($_POST);
        extract($_FILES);

        $ruta = "../../views/Admin/Files/";

        if (!isset($image_User["name"])) {
            $image_User = null;
        } else {

            $image_User = lreplace(".", "-" . $userID . ".", $image_User["name"]);
            // echo "imagen ".$image_User;
            $route_Image_User = $ruta . $image_User;
        }

        $sqlEditAcount = $this->execute("UPDATE user SET image_user ='$image_User' WHERE login ='$userID'");

        if ($sqlEditAcount) {
            // SI LA ruta DEL ARCHIVO NO EXISTE, SE SUBE A LA CARPETA
            if (!file_exists($route_Image_User)) {
                move_uploaded_file($_FILES["image_User"]["tmp_name"], utf8_decode($route_Image_User));
            }

            $answer["typeAnswer"] = true;
        }
        echo json_encode($answer);
    }
    public function editUsers()
    {
        // extract($_POST);
        // $answer = array();
        // $sqlEditAcount = $this->execute("UPDATE user SET image ='$image' WHERE login ='$login'");
        // if ($sqlEditAcount) {  $answer["typeAnswer"] = true; } 
        // echo json_encode($answer); 
    }
}
