<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Talentum</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Siimple
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="navbar-brand px-5">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo_talentum.png" alt="Logo Talentum" class="img-fluid"
            width="60"></a>
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="talentum/login_personal_talentum/index.php" class="scrollto">Iniciar sessió (nomes
              personal de
              Talentum) </a></li>
          <li class="active"><a href="talentum/talentum_Signup/signup.php" class="scrollto">Registrar-se</a></li>
          <li class="active"><a href="#header" class="scrollto">Inici</a></li>
          <li><a href="https://talentumformacio.wixsite.com/inicio" class="scrollto" target="_blank">Pàgina oficial</a>
          </li>
          <li><a href="https://talentumformacio.wixsite.com/inicio/tienda" class="scrollto" target="_blank">Botiga</a>
          </li>
          <li><a href="https://talentumformacio.wixsite.com/inicio/blog" target="_blank">Blog</a>

          <li><a href="#contact" class="scrollto">Contacta'ns</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container d-flex justify-content-center">
      <h1>Benvinguda a Talentum Formació</h1>
      <h2>Ingressa les teves dades</h2>
         <!-- ------zona errores---------- -->

      <?php if (isset($_GET['error'])): ?>

      <div class=" alert alert-danger text-center rounded-pill" role="alert">

          <?php echo $_GET['error'] ?>


      </div>
      <?php endif; ?>
      <form action="talentum/PHP/login-principal.php" method="post" class="formulario-botones ">
       
        <div class="row no-gutters ">
          <div class="col-md-6 form-group pe-md-1 botones1">
            <input type="text" name="username" class="form-control mx-2 rounded-pill" placeholder="El teu nom de usuari">

            <input type="password" class="form-control mx-2 rounded-pill" name="password" 
              placeholder="La teva contrassenya">
          </div>
          <div class="my-3">
            
          </div>
          <div class="row no-gutters d-grid  d-md-flex justify-content-md-center">
            <div class="col-md-4 form-group ps-md-1">
              <button class="btn btn-primary p-2 px-3 rounded-pill" type="submit" style="background-color:#fd680e!important;border-color:#fd680e;">Inicia sessió</button>
            </div>
            <div class="col-md-4 form-group ps-md-2 ">
              <button class="btn btn-primary rounded-pill" id="boton-registrar"><span><a style="color:white"
                    href="talentum/Talentum_Signup/signup.php">Registra't</a></button>
            </div>

          </div>
      </form>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="img/foto_principal.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">


            <h3>Expandeix les teves habilitats</h3>
            <p class="fst-italic">
              Talentum és una empresa que simula l'entorn empresarial amb finalitats formatives. Aquest web no conté
              productes reals.


            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> En inscriure't a un curs a Talentum Formació pots començar a
                aplicar allò que s'ha après immediatament.</li>
              <li><i class="bx bx-check-double"></i> Ensenyem únicament contingut rellevant, de manera que
                l'aprenentatge esdevé més pràctic i aplicable.</li>
              <li><i class="bx bx-check-double"></i> Els nostres horaris són flexibles, però si no trobes un ideal per a
                tu, fes-nos-ho saber.</li>
              <li><i class="bx bx-check-double"></i> Professors professionals i atents a les necessitats de l'alumnat.
              </li>
              <li><i class="bx bx-check-double"></i> Entorn tranquil i professional. </li>
              <li><i class="bx bx-check-double"></i> Bon horari i necessitat complertes dins la instal·lació.</li>
              <li><i class="bx bx-check-double"></i> Comunicació verbal i telemàtica professional. Inclusió de tot tipus
                de col·lectius.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="assets/img/why-us-1.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Curs de francès</a></h5>
                <p class="card-text">Preu: <del>368,05 €</del> <strong>descompte: 300 €/alumne*</strong><br>Grups
                  reduïts d'entre 5 y 12 alumnes.

                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="assets/img/why-us-2.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Curs Alemany</a></h5>
                <p class="card-text">Preu: <del>368,05 €</del><strong> descompte: 300 €/alumne*</strong><br>Grups
                  reduïts d'entre 5 y 12 alumnes. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="assets/img/why-us-3.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Curs anglès</a></h5>
                <p class="card-text">Preu: <del> 302,92 €</del><strong> descompte: 250,92 €/alumne*</strong><br>Grups
                  reduïts d'entre 5 y 12 alumnes. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Frequenty Asked Questions Section ======= -->
    <section class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Preguntes freqüents</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Problemes per ingressar al curs? <i
                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Com ingressar al curs? <i
                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Hi ha diploma del curs? <i
                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
                integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Altres formes de pagament? <i
                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">De cuant és la durada del curs? <i
                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
                vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
                gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Quins són els horaris del curs? <i
                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada
                nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis
                tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas
                fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequenty Asked Questions Section -->
    .
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contacte</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
            <div class="info">
              <div class="address">
                <i class="bx bx-map"></i>
                <p>Carrer dels Calders 32,<br>08203, Sabadell, Barcelona</p>
              </div>

              <div class="email">
                <i class="bx bx-envelope"></i>
                <p>talentum.sefed@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bx bx-phone-call"></i>
                <p>931683120</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://twitter.com/talentumforma?lang=ca" target="_blank" class="twitter"><i
                  class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/talentum.formacio.sls" target="_blank" class="facebook"><i
                  class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/wix/" target="_blank" class="instagram"><i
                  class="bx bxl-instagram"></i></a>
              <a href="https://es.linkedin.com/in/talentum-formaci%C3%B3-s-a-s-9247a8213" target="_blank"
                class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-7">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="El teu nom" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assumpte" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Comentari" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carregant</div>
                <div class="error-message"></div>
                <div class="sent-message">El teu comentari ha sigut enviar. Gràcies!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar comentari</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Talentum</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-landing-page/ -->
        Modificat per Yosuart i Yanina <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>