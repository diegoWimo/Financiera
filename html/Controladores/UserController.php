<?php
include '<Modelos/UserModel.php';

class UserController
{
    public static function inicioSesion()
    {
        if (isset($_POST['User']) && isset($_POST['Pass'])) {
            $user = $_POST['User'];
            $pass = $_POST['Pass'];
            $respuestaUsuario = UserModel::consultarUsuario($user, $pass);
            if ($respuestaUsuario['execute'] == 'ok') {
                if ($respuestaUsuario['respuesta'] != null) {
                    echo '<script> console.log("vamos a inicaira la sesion");</script>';
                    $_SESSION['autentificacion']='ok';
                    $_SESSION['userEmail'] = $respuestaUsuario['respuesta']['EMAIL'];
                    $_SESSION['userName'] = $respuestaUsuario['respuesta']['NOMBRE'];
                    echo '<script> window.location= "dashboard";</script>';
                
                    
                } else {
                    
                    echo '<script> console.log("el ususario no existe");</script>';
                }

            } else {
                echo '<script> console.log("error en la consulta");</script>';

            }

        }
    }
}
