<?php 
class Connection {
     
    private $server ;
    private $user ;
    private $password ;
    private $database ;
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
        $this->connection = new mysqli($this->server,$this->user,$this->password,$this->database);
        if(mysqli_connect_errno()){
            echo "no se ha podido establecer la conexion con la base de datos";
            exit();
            
        } else {
            $this->connection->set_charset("utf8");
        }
    }
    public function getConnection(){
        return $this->connection();

    }
    public function closeConnection ($connection){
        mysqli_close($connection);
    }
    public function execute($sql){
        $connection = $this->connection();
        if($this->connection){
            $result = mysqli_query($this->connection,$sql);
            return $result;
        }else{
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
}