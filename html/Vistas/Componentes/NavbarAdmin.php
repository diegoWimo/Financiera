<!-- Inicio Navbar-->
<div class="container">
    <nav class="navbar navbar-expand-md bg-nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Vistas/img/logo-azul.png" alt="logo" class="nav-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
                <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Catalogo de Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Recuperacion al cliente</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active pt-1" aria-current="page" href="#">
                            <i class="bi bi-geo-alt-fill"></i>Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active pt-1" aria-current="page" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-w<hatsapp"></i>
                            Whatsapp</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-top: -5px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class=" nav-icon bi bi-person-circle"></i>
                            <?php
                             echo $_SESSION['userName'];
                             ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="salir">Cerrar sesion</a></li>

                        </ul>
                    </li>

            </div>
            </ul>
        </div>
</div>
</nav>
</div>
<!-- Fin Navbar-->