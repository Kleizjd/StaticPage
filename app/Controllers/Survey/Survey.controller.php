<?php
include_once "../../config/connection.php";

class Survey extends connection {


    public function answerSurvey(){
        extract($_POST);
        $answer ="";
        $sql = "INSERT INTO respuestas_preguntas (correo, id_pregunta, respuesta) VALUES ('$correo', 1, $numberOne),
                                                                                ('$correo', 2, $numberTwo),
                                                                                ('$correo', 3, $numberThree),
                                                                                ('$correo', 4, $numberFour),
                                                                                ('$correo', 5, $numberFive),
                                                                                ('$correo', 6, $numberSix),
                                                                                ('$correo', 7, $numberSeven),
                                                                                ('$correo', 8, $numberEight),
                                                                                ('$correo', 9, $numberNine),
                                                                                ('$correo', 10, $numberTen)";
                                                                                // echo "este es sql <br>".$sql;
        $sqlSurvey = $this->execute($sql);                                                                     
        if($sqlSurvey!=null){
            $answer = "success";
        }
        echo json_encode(array('typeAnswer' => $answer));
    }
    public function getSurvey(){
        extract($_POST);
        // var_dump($_POST);
        // echo $correo;
        if($correo != ""){
            // $sqlForm = $this->execute("SELECT * FROM form_survey WHERE correo = $correo");
            // $survey = $this->consult("SELECT preguntas.id_pregunta, texto_pregunta, respuesta 
            //                             FROM preguntas, respuestas_preguntas 
            //                             WHERE preguntas.id_pregunta = respuestas_preguntas.id_pregunta
            //                             AND correo = $correo");
        }
        echo "SELECT preguntas.id_pregunta, texto_pregunta, respuesta 
        //                             FROM preguntas, respuestas_preguntas 
        //                             WHERE preguntas.id_pregunta = respuestas_preguntas.id_pregunta
        //                             AND correo = $correo";
        // include_once "../../views/product/view.WatchProduct.php";
    }
}