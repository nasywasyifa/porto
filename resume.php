<?php
include 'admin/koneksi.php';

$queryPendidikan =  mysqli_query($koneksi, "SELECT * FROM  pendidikan");
//Pengalamam
$queryPengalaman = mysqli_query($koneksi, "SELECT * FROM pengalaman ORDER BY id DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Resume - Personal Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/depan/img/favicon.png" rel="icon">
    <link href="assets/depan/img/apple-touch-icon.png" rel="apple-touch-icon">
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

<body class="resume-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Personal</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="resume.php" class="active">Resume</a></li>
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

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Resume</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li class="current">Resume</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <div class="container">

                <div class="row">
                    <?php
                    while ($rowPengalaman = mysqli_fetch_assoc($queryPengalaman)) { ?>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Professional Experience</h3>

                            <div class="resume-item pb-0">
                                <h4><?php echo $rowPengalaman['nama_perusahaan'] ?></h4>
                                <h5><?php echo $rowPengalaman['jabatan'] ?></h5>
                                <p><em>Internship - Accounting</em></p>
                                <ul>
                                    <li>Menerapkan software akuntansi Accurate Online dalam dunia bisnis</li>
                                    <li>Menganalisis dan mencatat transaksi bisnis UMKM</li>
                                    <li>Membuat laporan keuangan menggunakan software akuntansi Accurate Online</li>
                                    <li>Memproses Entry Jurnal & Buku Besar</li>
                                    <li>Mengoperasikan Paket Program Pengolah Angka/Spreadsheet</li>

                                </ul>
                                <!-- <p><em>
                                    dddd
                                </em></p> -->
                            </div><!-- Edn Resume Item -->

                            <h3 class="resume-title">Education</h3>
                            <?php
                            while ($resultPendidikan = mysqli_fetch_assoc($queryPendidikan)):
                            ?>

                                <div class="resume-item">
                                    <h4><?php echo $resultPendidikan['sekolah'] ?>

                                    </h4>
                                    <h5><?php echo $resultPendidikan['tahun_pendidikan'] ?> </h5>

                                    <p><em><?php echo $resultPendidikan['jurusan'] ?> </em></p>

                                </div><!-- Edn Resume Item -->

                            <?php endwhile ?>
                            <!-- <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                        </div>Edn Resume Item -->

                        </div>
                    <?php } ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Training Experience</h3>
                        <div class="resume-item">
                            <h4>Graphic Design</h4>
                            <h5> 2022 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <h3 class="sitename">Personal</h3>
            <p style="font-style: normal;">Hi everyone! My name is Nasywa Syifa Hanifah. I'm a web developer from Jakarta, Indonesia. I have 1 month of experience in web development. I really enjoy what I do right now. In my opinion, creating programs is not just a job but also an art that has aesthetic value.
      My job is to build your website to be functional and user-friendly yet still attractive. In addition, I provide a personal touch to your product and ensure that the website catches attention and is easy to use. My goal is to convey your message and identity in the most creative way. If you are interested in hiring me, please contact the listed contact.</p>
            <div class="social-links d-flex justify-content-center">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-skype"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
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