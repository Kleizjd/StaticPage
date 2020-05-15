<?php

class Connection {
    private $server;
    private $user;
    private $password;
    private $database;
    private $connection;


    public function __construct(){
        $this->setConnection();
        $this->connection();
    }

    private function setConnection(){
        require "configuration.php";
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function connection(){
        $this->connection = new mysqli($this->server, $this->user, $this->password, $this->database);
        if(mysqli_connect_errno()){
            echo "NO se ha podido establecer la conección con la base de datos.<br>", mysql_connect_error();
            exit();
        } else {
            $this->connection->set_charset("utf8");
        }
    }

    public function getConnection(){
        return $this->connection;
    }

    public function closeConnection($connection){
        mysql_close($connection);
    }

    public function execute($sql){
        $connection = $this->connection();
        if($this->connection){
            $result = mysqli_query($this->connection, $sql);
            
            // $filas = mysqli_num_rows($result);
            // echo "estas son".$filas;
            return $result;

           
        } else {
            echo mysqli_errno();
        }
    }
    public function consult($sql) {//retorna un array con cada campo segun la consulta
        if (!isset($result)) {
            $result = '';
        }
        $resultado = mysqli_query($this->getConnection(), $sql);
        if ($this->connection->connect_errno == 0) {
            $result = array();
            while ($row = mysqli_fetch_array($resultado)) {
                $result[] = $row;
            }
            return $result;
        } else {
            echo mysqli_error();
        }
    }
    //============[ CONNECTION TIME ]=====================================================//
    function uuId($serverID = 1) {
        $t = explode(" ", microtime());
        return sprintf('%04x-%08s-%08s-%04s-%04x%04x',
            $serverID,
            uniqid(),
            substr("00000000" . dechex($t[1]), -8), // get 8HEX of unixtime
            substr("0000" . dechex(round($t[0] * 65536)), -4), // get 4HEX of microtime
            mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
}

