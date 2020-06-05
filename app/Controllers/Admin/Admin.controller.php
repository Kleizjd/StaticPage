<?php
// @session_start();
include_once "../../config/connection.php";

class Admin extends connection {
    public function viewAcount() {
        extract($_POST);
        // echo 'miremos '.$userId;
        $ruta = "../../views/Admin/Files/";
        $sqlAdmin = "SELECT * FROM usuario WHERE correo = '$userId' ";
        $Admin = $this->execute($sqlAdmin);

        include_once "../../views/Admin/view.Admin.php";
    }
    public function editAcount() {
        extract($_POST);
        $answer = array();
        // if(){}
        // if(){}
        // if(){}
        // $sqlEditAcount = $this->execute("UPDATE usuario SET correo ='$emailUser', contrasena='$password' WHERE correo ='$login'");
        // if ($sqlEditAcount) {  $answer["typeAnswer"] = true; } 
        echo json_encode($answer); 
    }
    
    public function uploadImage() {
        $answer = array();
        extract($_POST);
        extract($_FILES);
      
        $ruta = "../../views/Admin/Files/";
        
        if(!isset($image_User["name"])) {
			$image_User = null;
		} else {

			$image_User = lreplace(".", "-" . $userID . ".", $image_User["name"]);
			// echo "imagen ".$image_User;
            $route_Image_User = $ruta . $image_User;
            
		}
        
        $sqlEditAcount = $this->execute("UPDATE user SET image_user ='$image_User' WHERE login ='$userID'");

        if ($sqlEditAcount) { 
            // SI LA ruta DEL ARCHIVO NO EXISTE, SE SUBE A LA CARPETA
		    if (!file_exists($route_Image_User)) {move_uploaded_file($_FILES["image_User"]["tmp_name"], utf8_decode($route_Image_User));}
            
            $answer["typeAnswer"] = true; 
        } 
        echo json_encode($answer); 
    }
    public function editUsers() {
        // extract($_POST);
        // $answer = array();
        // $sqlEditAcount = $this->execute("UPDATE user SET image ='$image' WHERE login ='$login'");
        // if ($sqlEditAcount) {  $answer["typeAnswer"] = true; } 
        // echo json_encode($answer); 
    }
}
