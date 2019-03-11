<?php session_start();?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>St. Bear</title>
    <?php include('js.php'); include('css.php'); ?>
  </head> 
  <body id="body">
    <?php include('components/nav.php'); include('components/carousel.php'); include('components/goup.php'); ?>


    <div class="container-fluid pt-5" id="Nosotros">
      <div class="row justify-content-center pt-4 pb-5">
        <div class="col-md-6 text-center">
          <h1 class="fMali" style="color: #724149"><strong>Nosotros</strong></h1>
          <p class="f18 f500" style="color: #212529">
            St. Bear Hospital está a la vanguardia de la investigación y el tratamiento 
            del diversas discapacidades infantiles y otras emergencias como huesitos rotos. 
          </p>
          <br>
        </div>
      </div><!-- end row description -->
      <div class="row pb-0 mb-0 justify-content-center">
        <div class="col text-center">
          <img src="src/img/kd1.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd2.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd7.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd6.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd5.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd8.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd3.png" width="85px">
        </div>
        <div class="col text-center">
          <img src="src/img/kd4.png" width="85px">
        </div>
      </div><!-- end row img -->
    </div><!-- end us -->

    <div class="banner img_quick pb-5 pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6"></div>
          <div class="col-md-6 text-center">
            <p><img class="img-fluid" width="100" src="src/img/bear2.png"></p>
            <h1 class="fMali"><strong>Los pequeños nos hacen mejores</strong></h1>
            <p class="f18 f500">Por eso en St. Bear queremos cuidarlos.</p>
            <br>
            <a href="#" class="btn btn-info btn-block  f700 fMuli">Oftalmología</a>
            <a href="#" class="btn btn-info btn-block  f700 fMuli">Ortopedistas</a>
            <a href="#" class="btn btn-info btn-block  f700 fMuli">Fracturas</a>
          </div>
        </div>
      </div>
    </div><!-- end baner -->


    <div class="row p-0 m-0" id="Fracturas">
      <div class="col-md-6 text-center pt-4">
        <div class="container pt-4 pb-4">
          <p><img class="img-fluid" width="90" src="src/img/yeso.png"></p>
          <h1 class="fMali"><strong>Fracturas</strong></h1>
          <p class="f18 f500">Arreglamos huesitos rotos para que los pequeñines sigan corriendo y se rompan otro.</p>
        </div>
      </div>
      <div class="col-md-6 p-0 m-0">
        <div class="banner img_s1"></div>
      </div>
    </div><!-- end row s1 -->

    <div class="row p-0 m-0" id="Oftalmologia">
      <div class="col-md-6 p-0 m-0">
        <div class="banner img_s2"></div>
      </div>
      <div class="col-md-6 text-center pt-4">
        <div class="container pt-4 pb-4">
          <p><img class="img-fluid" width="90" src="src/img/lentes.png"></p>
          <h1 class="fMali"><strong>Oftalmología</strong></h1>
          <p class="f18 f500">Revisamos los ojos para que no crezcan estando ciegos.</p>
        </div>
      </div>
    </div><!-- end row s2 -->

    <div class="row p-0 m-0" id="Ortopedistas">
      <div class="col-md-6 text-center pt-4">
        <div class="container pt-4 pb-4">
          <p><img class="img-fluid" width="90" src="src/img/broke.png"></p>
          <h1 class="fMali"><strong>Ortopedistas</strong></h1>
          <p class="f18 f500">Arreglamos piecitos chuecos para que los pequeñines vayan al camino de bien.</p>
        </div>
      </div>
      <div class="col-md-6 p-0 m-0">
        <div class="banner img_s3"></div>
      </div>
    </div><!-- end row s3 -->
      

    <div class="banner img_contact" id="Contacto">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6  pt-4" style="color: #ffffff;">
            <br>
            <h1 class="fMali color_sec"><strong>Contacto St. Bear</strong></h1> <br>
            <h4 class="fSarabun">
              <i class="far fa-hospital-alt mr-2"></i> Universidad Politécnica de Quintana Roo <br>
              <i class="far fa-road mr-2"></i> Av. Arco Norte <br> 
              <i class="far fa-map-marker-alt mr-3"></i> Cancún Q. Roo <br>
              <i class="far fa-mobile-alt mr-3"></i> Teléfono: 813-281-0300 <br>
              <i class="far fa-laptop mr-2"></i> Síguenos en nuestras redes sociales
            </h4>
            
            <div class="row mt-4 justify-content-start">
              <div class="col-md-3">
                  <a target="_blank" href="https://www.facebook.com/JazminPowl" class="btn btn_social text-white f400 fb btn_social_square fa_social m-1"><i class="fab fa-facebook-f"></i><span class="fb"></span></a>    
              </div>
              <div class="col-md-3">
                  <a target="_blank" href="https://www.instagram.com/jazmin.pool/" class="btn btn_social text-white f400 ig btn_social_square fa_social m-1"><i class="fab fa-instagram"></i><span class="ig"></span></a>
              </div>
              <div class="col-md-3">
                  <a target="_blank" href="https://mail.google.com/mail/u/0/#inbox" class="btn btn_social text-white f400 gg btn_social_square fa_social m-1"><i class="fab fa-google"></i><span class="gg"></span></a>
              </div>
            </div><!-- social icons -->

          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </div><!-- end baner -->


    <?php include('components/footer.php'); ?>    
  </body>
</html>
