<?php
include_once "../../config/connection.php";

class Survey extends connection {


    public function answerSurvey(){
        extract($_POST);

        $sql = "INSERT INTO form_survey (correo, id_pregunta) VALUES ($correo,)";

    }
    public function geSurvey(){
        extract($_POST);

        if($correo != ""){
            $sqlForm = $this->execute("SELECT * FROM form_survey WHERE correo = $correo");
        }
        echo json_encode($answer);
    }
}