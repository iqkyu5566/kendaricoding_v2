<!DOCTYPE html>
<html bhs="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kendari Coding - <?= $title; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/assets_web/kendaricoding/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>assets/assets_web/kendaricoding/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/assets_web/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/assets_web/template/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/assets_web/template/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/assets_web/template/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/assets_web/template/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/assets_web/template/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/assets_web/template/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v2.0.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">KENDARI CODING</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="<?= base_url(); ?>assets/assets_web/kendaricoding/img/logo.png" alt="" class="img-fluid"></a> -->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#hero">Beranda</a></li>
              <li><a href="#about">Kelas</a></li>
              <li><a href="#services">Layanan</a></li>
              <li><a href="#portfolio">Portofolio</a></li>
              <li><a href="#team">Alur Belajar</a></li>
              <li><a href="#contact">Kontak</a></li>


            </ul>
          </nav>
          <!-- .nav-menu -->
          <a href="<?= base_url('User/register'); ?>" class="get-started-btn scrollto">Daftar</a>
        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Belajar Coding Lebih Mudah di Kendari Coding</h1>
          <h2>Kami berlokasi di Kota Kendari serta fokus untuk melatih pembelajaran
            pemrograman Web dan Mobile secara online dan offline
          </h2>
          <div class="row">
            <div class="col">
              <a href="<?= base_url('auth/login'); ?>" class="btn-get-started scrollto">Mulai Belajar</a>
            </div>
            <div class="col">
              <a href="<?= base_url('pemesanan/pesanaplikasi'); ?>" class="btn-get-started scrollto">Pesan Aplikasi</a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <!-- <img src="<?= base_url(); ?>assets/assets_web/template/img/hero-img.png" class="img-fluid animated" alt=""> -->
          <img src="<?= base_url(); ?>assets/assets_web/belajar/5.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
    <?php include 'depan/ombak.php'; ?>
  </section><!-- End Hero -->
  <main id="main">

    <?= $contents ?>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CV. Inovasi Technologhy</h3>
            <p>
              Jalan Kelapa no. 35<br>
              Kota Kendari<br>
              Sulawesi Tenggara <br><br>
              <strong>Phone:</strong> 085342433353<br>
              <strong>Email:</strong> admin@kendaricoding.id<br>
            </p>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join My Channel</h4>
            <p>Youtube Kendari Coding</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span>CV. Inovasi Technologhy (ITech)</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="#">Kendari Coding</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->



  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url(); ?>assets/assets_web/template/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets/assets_web/template/js/main.js"></script>
  <!-- Translate -->

</body>

</html>