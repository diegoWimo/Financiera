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
    public static function conectar(){
        /* $prueba = "mysql:host={$this->host}; dbname={$this->db}; charset=utf8mb4"; */
        try {
        $email_usario="lego@gmail.com";
        $password_usuario="12345";

        $conexion=new PDO("mysql:host=localhost; dbname=Financiera", "root", "");
        $conexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="SELECT * FROM usuario WHERE email= :login and pass= :password";
        $resultado=$conexion->prepare($query);

        $resultado->bindValue(":login", $email_usario);
        $resultado->bindValue(":password",$password_usuario);

        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if($numero_registro!=0){

        }else{

        }

        }
         catch (\Throwable $th) {
            die("Error:" . $th->getMessage());
        }
    }

}

?>