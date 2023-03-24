<?php

class PlantillaControlador
{
    public static function inicioCliente()
    {
        include 'Vistas/Componentes/Navbar.php';
        include 'Vistas/Componentes/Slider.php';
        include 'Vistas/Componentes/SeccionDocumentos.php';
        include 'Vistas/Componentes/SeccionPlazos.php';
        include 'Vistas/Componentes/SeccionPromocional.php';
        include 'Vistas/Componentes/SeccionContador.php';
        include 'Vistas/Componentes/SeccionApp.php';
        include 'Vistas/Componentes/SeccionPagos.php';
        include 'Vistas/Componentes/Footer.php';
    }

    public static function plantillaMain()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        include 'Vistas/Componentes/Cabecera_html.php';

        if (isset($_GET['ruta'])) {
            if (isset($_SESSION['autentificacion']) && $_SESSION['autentificacion'] === 'ok') {
                include 'Vistas/Componentes/NavbarAdmin.php';
                /* echo '<h1>Aqui decidiremos el ruteo una vez iniciada la sesion.</h1>'; */
                if($_GET['ruta']=='salir'){
                    include 'Vistas/Componentes/Salir.php';
                }

            } else {
                if ($_GET['ruta'] == 'login') {
                    include 'Vistas/Componentes/loginAdmin.php';
                } else {
                    PlantillaControlador::inicioCliente();
                }
            }

        } else {
            PlantillaControlador::inicioCliente();
        }

        include 'Vistas/Componentes/Pie_html.php';

    }

}

/*

( ! ) Warning: Undefined array key "ruta" in C:\xampp\htdocs\Financiera\html\Controladores\PlantillaControlador.php on line 17
Call Stack
#    Time    Memory    Function    Location
1    0.4124    405040    {main}( )    ...\index.php:0
2    0.4133    408864    PlantillaControlador::plantillaMain( )
 */
