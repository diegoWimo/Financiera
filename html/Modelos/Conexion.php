<?php
class Conexion{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $conn;


    public function __construct($host, $user, $pass, $db)
    {
        $this->host=$host;
        $this->user=$user;
        $this->pass=$pass;
        $this->db=$db;
    }
    public function conectar(){
        $conexion = "mysql:host={$this->host}; dbname={$this->db}; charset=utf8mb4";

        try {
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}

?>