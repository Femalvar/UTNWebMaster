<!-- REGISTRO MODAL -->
<form action="registro.php" method="POST" id="FormRegistro">
    <div class="modal fade" id="RegistroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg8">
            <div class="modal-header bg-warning bg-gradient border-0">
            <h5 class="modal-title" id="exampleModalLabel">REGISTRO</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="row g-3">
                    <div class="col-6">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
                    </div>
                </label>
                <label class="row">
                    <div class="col-12 my-3">
                        <input type="text" class="form-control" name="email" placeholder="E-Mail" required>
                    </div>
                </label>
                <label class="row g-3">
                    <div class="col-6">
                        <input type="password" class="form-control" name="claveUser" placeholder="Password" required>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" name="Re_claveUser" placeholder="Repetir Password" required>
                    </div>
                </label>
            </div>
            <div class="modal-footer border-top border-dark">
                <span class="text-light">Ya estás registrado?
                    <span class="pe-2 ps-1"><a href="#" class="text-warning" data-bs-toggle="modal" data-bs-target="#LoginModal" data-bs-dismiss="modal">Iniciar Sesión</a></span>
                </span>
                <button type="submit" value="registrarse" target="_self" class="btn btn-warning">REGISTRARME</button>
            </div>
        </div>
    </div>
    </div>
</form>

<!-- LOGIN MODAL -->
<form action="login.php" method="POST" id="FormLogin">
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg8">
            <div class="modal-header bg-warning bg-gradient border-0">
            <h5 class="modal-title" id="exampleModalLabel">INGRESAR</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="row">
                    <div class="col-12 my-3">
                        <input type="text" class="form-control" name="email" placeholder="E-Mail" required>
                    </div>
                </label>
                <label class="row">
                    <div class="col-12 my-3">
                    <input type="password" class="form-control" name="claveUser" placeholder="Password" required>
                    </div>
                </label>
            </div>
            <div class="modal-footer border-top border-dark">
                <span class="text-light">No estás registrado?
                    <span class="pe-2 ps-1"><a href="#" class="text-warning" data-bs-toggle="modal"
                    data-bs-target="#RegistroModal" data-bs-dismiss="modal">Regístrate</a></span>
                </span>
                <button type="submit" value="ENVIAR" target="_self" class="btn btn-warning">INICIAR SESION</button>
            </div>
        </div>
    </div>
    </div>
</form>

<!-- REGISTRO OK -->
<div class="modal fade" id="RegistroOK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg8">
            <div class="modal-header bg-warning bg-gradient border-0">
            <h5 class="modal-title" id="exampleModalLabel">GRACIAS POR REGISTRARTE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="row">

                        <?php echo "<h4 class='text-light'>Bienvenido ".$nombre."!.<br> Por favor, inicia sesión.</h4>"; ?>

                </label>
            </div>
            <div class="modal-footer border-top border-dark">
                <button type="submit" value="IrLogin" target="_self" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#LoginModal" data-bs-dismiss="modal">ENTENDIDO</button>
            </div>
        </div>
    </div>
</div>


<!-- MODAL PERFIL -->
<form action="logout.php" method="POST" id="FormPerfil">
    <div class="modal fade" id="PerfilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg8">
            <div class="modal-header bg-warning bg-gradient border-0">
            <h5 class="modal-title" id="exampleModalLabel">TU PERFIL</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="row g-3">
                    <div class="col-9">
                        <div class="input-group my-2 mt-3">
                            <input type="text" class="form-control" placeholder="<?php echo $_SESSION['nombre'] ?>" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="button">Editar</button>
                            </div>
                        </div>
                        <div class="input-group my-2 mt-3">
                            <input type="text" class="form-control" placeholder="<?php echo $_SESSION['apellido'] ?>" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="button">Editar</button>
                            </div>
                        </div>
                        <div class="input-group my-2 mt-3">
                            <input type="text" class="form-control" placeholder="<?php echo $_SESSION['email'];?>" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="button">Editar</button>
                            </div>
                        </div>
                        <div class="input-group my-2 mt-3">
                            <input type="text" class="form-control" placeholder="Teléfono de Contacto" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="button">Editar</button>
                            </div>
                        </div>
                        <div class="input-group my-2 mt-3">
                            <input type="text" class="form-control" placeholder="Dirección de Contacto" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="button">Editar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <img class="fotoperfil" width="80px" src="img/Perfil-img.png" alt="foto Perfil"><br>
                        <button class="btn btn-outline-warning btn-sm mt-2">Editar</button>
                    </div>
                </label>
                
            </div>
            <div class="modal-footer border-top border-dark">
                <button type="submit" value="logout" class="btn btn-outline-secondary">LOGOUT</button>
                <button type="submit" value="registrarse" class="btn btn-warning" data-bs-dismiss="modal">DESCARTAR</button>
                <button type="submit" value="guardarCambios" class="btn btn-warning" data-bs-dismiss="modal">GUARDAR</button>
            </div>
        </div>
    </div>
    </div>
</form>


