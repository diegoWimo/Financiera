
<div class="login vh-100">
    <div class="container-fluid ">
        <div class="row justify-content-center pt-5">
            <div class="col-md-3 col-10 item-izquierdo">
                <img src="Vistas/img/logo-azul.png" alt="" class="img-fluid my-5">
                <p class="my-5">Sistema de administracion de pagina por financiera

                <p>
            </div>
            <div class="col-md-3 col-10 item-derecho">
                <h1>Welcome back</h1>

                <p>Ingresa tus datos para loguearte</p>
                <form method="POST" class="mb-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input placeholder="Email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="User" required>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input placeholder="Password" type="password" class="form-control"
                                id="exampleInputPassword1" name="Pass" required>
                        </div>

                        <div class="d-grid gap2 mt-5">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                </form>
                <?php  
                UserController::inicioSesion();
                
                ?>


            </div>
        </div>

    </div>
</div>