
<?php

// use function PHPSTORM_META\type;
// include_once "../Controllers/Utilities/Utilities.controller.php";
include_once "../../config/connection.php";

class Desprendible extends connection
{


    public function viewDesprendible()
    {
        include_once "../../views/Desprendible/SearchDesprendible.php";
    }
}