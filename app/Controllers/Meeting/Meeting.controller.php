
<?php

// use function PHPSTORM_META\type;

@session_start();
// include_once "../Controllers/Utilities/Utilities.controller.php";
include_once "../../config/connection.php";

class Meeting extends connection
{


    public function viewCreateMeeting()
    {
        include_once "../../views/Meeting/CreateMeeting.php";
    }
    public function createMeeting()
    {
        extract($_POST);
        $answer = false;

        $sql = "INSERT INTO reunion (fecha, titulo, descripcion) VALUES ('$fecha_reunion', '$titulo_reunion', '$descripcion')";

        $sqlMeeting = $this->execute($sql);

        if ($sqlMeeting != 0) {
            $answer = true;
        }
        echo json_encode(array("typeAnswer" => $answer));
        // include_once "../../views/Meeting/CreateMeeting.php";
    }
    public function searchMeeting()
    {
        include_once "../../views/Meeting/SearchMeeting.php";
    }
    public function notificationMeeting()
    {

        $sqlMeeting = "SELECT titulo, descripcion, fecha FROM reunion WHERE (DATEDIFF(fecha,NOW())) <= '4' ";
        $sql = $this->execute($sqlMeeting);
        $sqlNotificaciones = "SELECT count(*) as notificaciones FROM reunion WHERE (DATEDIFF(fecha,NOW())) <= '4'";
        $sqlNoti = $this->execute($sqlNotificaciones);
        $row = $sqlNoti->fetch_assoc();
        $numero = $row['notificaciones'];

        // if ($sql != null) {
        if (mysqli_num_rows($sql) != 0) {
            $notificacion = "<li><div class='message-center'>";

            foreach ($sql as $reunion) {

                $notificacion .= "      <a href='javascript:void(0)'>
                                            <div class='btn btn-danger btn-circle'><i class='ti-calendar'></i></div>
                                                <div class='mail-contnet'>";
                $notificacion .= "             <h5>" . $reunion['titulo'] . "</h5> <span class='mail-desc'>" . $reunion['descripcion'] . "</span> <span class='time'>".$reunion['fecha']."</span>";
                $notificacion .= "          </div>
                                        </a>";
            }
            $notificacion .= "   </div></li>";
        } else {
            $notificacion = "";
        }

        $table = array("cantNotificaciones" => $numero, "notificaciones" => $notificacion);
        echo json_encode($table);
    }
}
