<div class="banner baner_after">
    <div class="container">
        <div class="row justify-content-center p-3">
            <h2 class="fMali">St. Bear Hospital</h2>
        </div>
    </div>
</div>
<div class="banner img_footer">
    <div class="container pt-3 pb-5">
        <div class="row justify-content-center pl-2 pr-2 pt-3 pb-3">
            <div class="col-md-3 text-center pt-2">
                <div class="row justify-content-center">
                    <a class="navbar-brand m-1" href="Home.php">
                        <img src="src/img/bear.png" width="120" height="120" class="d-inline-block align-top" alt="">
                    </a>            
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col">
                        <a target="_blank" href="https://www.facebook.com/JazminPowl" class="btn btn_social text-white f400 fb btn_social_fb fa_social m-1"><i class="fab fa-facebook-f"></i><span class="fb"></span></a>    
                    </div>
                    <div class="col">
                        <a target="_blank" href="https://www.instagram.com/jazmin.pool/" class="btn btn_social text-white f400 ig btn_social_ig fa_social m-1"><i class="fab fa-instagram"></i><span class="ig"></span></a>
                    </div>
                    <div class="col">
                        <a target="_blank" href="https://mail.google.com/mail/u/0/#inbox" class="btn btn_social text-white f400 gg btn_social_gg fa_social m-1"><i class="fab fa-google"></i><span class="gg"></span></a>
                    </div>
                </div>
            </div><!-- col-md-1 -->
        </div>
        <div class="row justify-content-center pl-2 pr-2 pt-3 pb-3">
            <div class="col-md-8 text-center pt-2">
                <div class="row mt-2 justify-content-center">
                    <a href="Home.php#Nosotros" class="ml-4 links_footer f18">Nosotros</a>
                    <a href="Home.php#Fracturas" class="ml-4 links_footer f18">Fracturas</a>
                    <a href="Home.php#Oftalmologia" class="ml-4 links_footer f18">Oftalmología</a>
                    <a href="Home.php#Ortopedistas" class="ml-4 links_footer f18">Ortopedistas</a>
                    <a href="Home.php#Contacto" class="ml-4 links_footer f18">Contacto</a>
                    <?php if(!isset($_SESSION['userSession'])) { ?>
                        <!-- aqui va la condicion si está o no en sesion -->
                        <a class="cursorhand ml-4 links_footer f18" data-toggle="modal" data-target="#loginmodal">Miembros</a>
                        <!-- <button type="button" class="btn btn-block" data-toggle="modal" data-target="#loginmodal">Miembro</button> -->
                    <?php include('components/login.php'); }else{?>
                        <!-- <li class="nav-item right"> -->
                            <a class="cursorhand ml-4 links_footer f18" href="Members.php">Mis citas</a>
                        <!-- </li>                 -->
                    <?php }?>

                    <!--    <a href="Members.php" class="ml-4 links_footer f18">Miembros</a> -->
                    <a href="faqs.php" class="ml-4 links_footer f18">FAQs</a>
                </div>
            </div><!-- col-md-1 -->
        </div>
        <div class="row justify-content-center p-0 mt-2 mb-0">
            <p style="font-size: 16px !important;">Made with <i class="fa fa-heart lv"></i> by Jazmín Pool <i class="fab fa-angellist"></i></p>
        </div>
    </div>
</div><!-- end baner -->