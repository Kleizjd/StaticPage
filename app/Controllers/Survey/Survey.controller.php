<?php
include_once "../../config/connection.php";

class Survey extends connection
{


    public function answerSurvey()
    {
        extract($_POST);
        // var_dump($_POST);
        $answer = "";
        $sql = "INSERT INTO respuestas_preguntas (correo, id_pregunta, respuesta) VALUES ('$correo', 1, '$numberOne'),
                                                                                ('$correo', 2, '$numberTwo'),
                                                                                ('$correo', 3, '$numberThree'),
                                                                                ('$correo', 4, '$numberFour'),
                                                                                ('$correo', 5, '$numberFive'),
                                                                                ('$correo', 6, '$numberSix'),
                                                                                ('$correo', 7, '$numberSeven'),
                                                                                ('$correo', 8, '$numberEight'),
                                                                                ('$correo', 9, '$numberNine'),
                                                                                ('$correo', 10, '$numberTen')";
        $sqlSurvey = $this->execute($sql);
        if ($sqlSurvey != null) {
            $answer = "success";
        }
        echo json_encode(array('typeAnswer' => $answer));
    }
    public function getSurvey()
    {
        extract($_POST);
        $name = array();
        // var_dump($_POST);
        // echo $correo;
        if ($correo != "") {
            $sql = "SELECT preguntas.id_pregunta, texto_pregunta, respuesta, CONCAT(nombres, ' ', apellidos) AS Nombre_Completo FROM preguntas, respuestas_preguntas, usuario
            WHERE preguntas.id_pregunta = respuestas_preguntas.id_pregunta AND usuario.correo = respuestas_preguntas.correo
            AND usuario.correo = '$correo'";
            $searchEmail = $this->execute($sql);

            foreach ($searchEmail as $list) {
                if ($list["Nombre_Completo"]!="") 
                    $name["Nombre_Completo"] = $list["Nombre_Completo"];
                    break;
                
            }
            include_once "../../views/Survey/SearchSurvey.php";
        }
    }
    public function selectEmail()
    {

        $query = $this->execute("SELECT id_persona, correo FROM usuario WHERE id_rol='2' ");
        // $query = $this->execute("SELECT Id_Conferencia, Titulo FROM conferencias WHERE Estado_Conferencia =" . $estado . " ");

        $select = "";
        $select .= "<option value=''>Seleccione ...</option>";
        while ($resultado = mysqli_fetch_row($query)) {
            $select .= "<option value=" . $resultado[1] . ">" . $resultado[1] . "</option>";
        }

        echo $select;
    }
}
