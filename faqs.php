<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>St. Bear | Faqs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('js.php'); include('css.php'); ?>
</head>
<body>
    <?php include('components/nav.php'); ?>

    <div class="banfaqs">
        <div class="container">
            <div class="row pt-4 justify-content-start text-white fMali">
                <h1>Preguntas frecuentes</h1>
            </div>
        </div>
    </div><!-- end banner -->
    <br>

    <div class="container mb-5 mt-3">
    

    <div class="container-fluid">
        <div class="row title_fqs fMali mb-2">
            <h5><i class="fas fa-users "></i>  Visitantes</h5>
        </div>
        <div class="row">
            <div class="col-md-10">
                <a class="fMuli f600 faqsq" data-toggle="collapse" href="#faq1" role="button" aria-expanded="false">
                    <h2> ¿Cómo puedo contactarlos? </h2>
                </a>
                <div class="collapse" id="faq1">
                    <span class="f18"><i class="fas fa-angle-right mr-2 ml-5"></i>
                        En el apartado de <a href="Home.php#Contacto">contactanos</a> estan nuestros datos.
                    </span>
                </div>
            </div>
        </div><!-- end faqs visitabtes-->
        <div class="row">
            <div class="col-md-10">
                <a class="btn-block fMuli f600 faqsq" data-toggle="collapse" href="#faq2" role="button" aria-expanded="false">
                    <h2>¿Como puedo tener una cuenta y ser miembro?</h2>
                </a>
                <div class="collapse" id="faq2">
                    <span class="f18"><i class="fas fa-angle-right mr-2 ml-5"></i>
                        Para ser miembro y hacer citas mediante nuestra pagina, 
                        debes solicitar tu membresia con tu Medico en nuestra
                        clinica
                    </span>
                </div>
            </div>
        </div>

        <div class="row title_fqs fMali mt-3">
            <h5><i class="fas fa-users-crown"></i>  Miembros</h5>
        </div>

        <div class="row">
            <div class="col-md-10">
                <a class="btn-block fMuli f600 faqsq" data-toggle="collapse" href="#faq3" role="button" aria-expanded="false">
                    <h2>¿Cómo agendar una cita?</h2>
                </a>
                <div class="collapse" id="faq3">
                    <div class="">
                        <span class="f18"><i class="fas fa-angle-right mr-2 ml-5"></i>
                            Para agendar una cita debes ser miembro, consulta 
                            <a data-toggle="collapse" href="#faq2" role="button" aria-expanded="false">
                                ¿como ser miembro?.
                            </a> <br>
                            Con tus credenciales, accede y reserva una cita con
                            nosotros.
                        </span>
                    </div>
                </div>
            </div>
        </div><!-- end faqs members -->
        <div class="row">
            <div class="col-md-10">
                <a class="btn-block fMuli f600 faqsq" data-toggle="collapse" href="#faq4" role="button" aria-expanded="false">
                    <h2>¿Por que no puedo eliminar una cita?</h2>
                </a>
                <div class="collapse" id="faq4">
                    <div class="">
                        <span class="f18"><i class="fas fa-angle-right mr-2 ml-5"></i>
                            Las citas pasan de 'reservado' a cancelado, ya que esta
                            es la forma correcta de llamarla cuando no quieres más
                            esta cita. Ya que de esa manera, nosotros y usted tenemos el control de eso.... 
                            <br>
                            Tambien proximamente podrá reactivar una cita ya cancelada.
                        </span>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>




    <?php include('components/footer.php'); ?>
</body>
</html>