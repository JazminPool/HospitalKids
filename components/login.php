
<form action="gets.php" method="post">
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="row justify-content-center  mt-2 mb-0">
                                <img src="src/img/bear.png" width="100" height="100" class="d-inline-block align-center" alt="">
                            </div>                                        
                            <div class="row justify-content-center mt-2 mb-0 f700 fMuli">
                                <a class="navbar-brand f22" href="#">
                                        St. Bear Miembros
                                </a>
                                <span class="subtitle_color">Inicia sesión para administrar tus citas.</span>
                            </div>
                            <div class="row ml-4 mr-4 mb-3 mt-1 fMuli">
                                Correo electrónico:
                                <input type="email" name="userinput" placeholder="usuario@ejemplo.com" required class="form-control">
                            </div>
                            <div class="row m-4 fMuli">
                                Contraseña:
                                <input type="password" name="passinput" placeholder="contraseña" required class="form-control">
                                <p class="color_sec">¿Aún no eres miembro? Contacta a nuestro personal. <i class="fas fa-user-headset"></i></p>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-block btn_sec" data-dismiss="modal">Cerrar <i class="fal fa-times"></i></button>
                                </div>
                                <div class="col-sm-7">
                                    <button type="submit" name="btn_action" value="login_" title="Iniciar sesión" class="btn btn_main btn-block fMuli text-white f00">
                                        Iniciar sesión <i class="fal fa-sign-in"></i>
                                    </button>
                                </div>
                            </div>
                        </div><!--end col-md formulario-->

                        <!-- <div class="col-md-7">
                            <div id="carouselLogin" class="carousel slide m-0" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselLogin" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselLogin" data-slide-to="1"></li>
                                    <li data-target="#carouselLogin" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="src/img/11.jpg" alt="image">
                                        <div class="carousel-caption d-none w-100 d-md-block overlay">
                                            <div class="textcarrousel">
                                                <h5>Agenda</h5>
                                                <p class="f300 fhind">Administra tus citas de forma rápida.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselLogin" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselLogin" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </div>
                        </div>end col-md carrusel -->
                    </div><!--end row-->
                </div><!--end cardbody-->
            </div><!-- end content modal -->
        </div><!-- end modal dialog -->
    </div><!-- end modal -->
</form>