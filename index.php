<?php
include 'admin/koneksi.php';
// Konten About
$queryAbout = mysqli_query($koneksi, "SELECT  * FROM about");
$rowAbout =  mysqli_fetch_assoc($queryAbout);
// iSI kONTEN
$queryKonten = mysqli_query($koneksi, "SELECT * FROM konten");
$rowKonten = mysqli_fetch_assoc($queryKonten);
//Home
$querySetting = mysqli_query($koneksi, "SELECT * FROM general_setting ORDER BY id DESC");
$rowSetting = mysqli_fetch_assoc($querySetting);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Personal Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/depan/img/favicon.png" rel="icon">
  <link href="assets/depan/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/depan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/depan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/depan/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/depan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/depan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/depan/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Personal</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portofolio.php">Portofolio</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="admin/upload/<?php echo $rowSetting['logo'] ?>" alt="" data-aos="fade-in">

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <!-- BUAT NAMBAH NAMA USER -->
        <h2><?php echo $rowSetting['website_name'] ?></h2>
        <!-- BUAT NAMBAH KETERANGAN KONTEN -->
        <p><?php echo $rowSetting['website_description'] ?></p>
        <div class="social-links">
          <a target="_blank" href="https://twitter.com/"><i class="bi bi-twitter-x"></i></a>
          <a target="_blank" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/nasywaasyifa"><i class="bi bi-instagram"></i></a>
          <a target="_blank" href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Personal</h3>
      <p style="font-style: normal;">Hi everyone! My name is Nasywa Syifa Hanifah. I'm a web developer from Jakarta, Indonesia. I have 1 month of experience in web development. I really enjoy what I do right now. In my opinion, creating programs is not just a job but also an art that has aesthetic value.
      My job is to build your website to be functional and user-friendly yet still attractive. In addition, I provide a personal touch to your product and ensure that the website catches attention and is easy to use. My goal is to convey your message and identity in the most creative way. If you are interested in hiring me, please contact the listed contact.</p>
      
        
      <div class="social-links d-flex justify-content-center">
      <!-- <a target="_blank" href="<?php echo $rowSetting[''] ?>"><i class="bi bi-twitter-x"></i></a> -->
        <a target="_blank" href="https://twitter.com"><i class="bi bi-twitter-x"></i></a>
        <a target="_blank" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/nasywaasyifa"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="https://github.com/nasywasyifa"><i class="bi bi-github"></i></a>
        <a target="_blank"href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>

      <div class=
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Personal</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/depan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/depan/vendor/php-email-form/validate.js"></script>
  <script src="assets/depan/vendor/aos/aos.js"></script>
  <script src="assets/depan/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/depan/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/depan/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/depan/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/depan/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/depan/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/depan/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/depan/js/main.js"></script>

</body>

</html>