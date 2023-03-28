<?php
    
    class UserModel{
        public static function consultarUsuario($userName, $pass){
          try {
            $query="SELECT * FROM usuario WHERE email= :user and pass=:password";
            $resultado=Conexion::conectar()->prepare($query);
            $resultado->bindValue(":user",$userName);
            $resultado->bindValue(":password",$pass);
          /*   $resultado->bindParam(":user", $username,PDO::PARAM_STR);
            $resultado->bindParam(":pass", $pass, PDO::PARAM_STR); */
            $resultado->execute();
            $estatusQuery = ['execute' => 'ok', 'respuesta' => $resultado->fetch(PDO::FETCH_ASSOC)];
         
        } catch (PDOException $e) {
            $estatusQuery=['execute'=>'error','respuesta'=>$e->getMessage()];
          }
          $resultado=null;
          return $estatusQuery;
        }
    }


?>