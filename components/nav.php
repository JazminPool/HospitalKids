<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="Home.php">
        <img src="src/img/bear.png" 
            width="100" height="100" class="d-inline-block align-center ml-2 mr-2" alt="">
            St. Bear
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
        <div class="right">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php#Nosotros">Nosotros</a>
                </li>
                <li class="nav-item dropdown dpw">
                    <a class="nav-link dropdown-toggle" href="#" id="dropservices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios
                    </a>
                    <div class="dropdown-menu dpwmenu" aria-labelledby="dropservices">
                        <a class="dropdown-item" href="Home.php#Fracturas">Fracturas</a>
                        <a class="dropdown-item" href="Home.php#Oftalmologia">Oftalmología</a>
                        <a class="dropdown-item" href="Home.php#Ortopedistas">Ortopedistas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php#Contacto">Contacto</a>
                </li>
                <?php if(!isset($_SESSION['userSession'])) { ?>
                    <!-- aqui va la condicion si está o no en sesion -->
                    <a class="nav-link cursorhand" data-toggle="modal" data-target="#loginmodal">Iniciar</a>
                      <!-- <button type="button" class="btn btn-block" data-toggle="modal" data-target="#loginmodal">Miembro</button> -->
                <?php include('components/login.php'); }else{?>
                    <li class="nav-item right">
                        <a class="nav-link cursorhand" href="Members.php">Mis citas</a>
                    </li>                
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
