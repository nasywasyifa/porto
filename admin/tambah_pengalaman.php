<?php
session_start();
include 'koneksi.php';

//jika button simpan di tekan
if (isset($_POST['simpan'])) {
    // print_r($_POST);
    // die;
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $deksripsi_pengalaman = $_POST['deksripsi_pengalaman'];
    $jabatan = $_POST['jabatan'];
    $deskripsi_jabatan = $_POST['deskripsi_jabatan'];



    //$_POST : diambil dari form input data
    //$_GET : URL ?parameter 'nilai'
    //$_FILES : ngambil nilai dari input type file

    // if (!empty($_FILES['foto']['name'])) {
    //     $nama_foto = $_FILES['foto']['name'];
    //     $ukuran_foto = $_FILES['foto']['size'];

    //     //tipe foto, png,jpg,etc
    //     $ext = array('png', 'jpg', 'jpeg');
    //     $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

    //     //JIKA EXTENTION FOTO TIDAK ADA EXT YANG TERDAFTAR DI ARRAY EXT
    //     if (!in_array($extFoto, $ext)) {
    //         echo "extention tidak sesuai";
    //         die;
    //     } else {
    //         //pindahkan gambar dari tmp folder ke folder yang sudah kita buat
    //         move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);
    //         $insert = mysqli_query($koneksi, "INSERT INTO foto_profile (nama_profile,jabatan_profile,foto) VALUES ('$nama_profile','$jabatan_profile','$nama_foto')");
    //     }
    // } else {
    //     $insert = mysqli_query($koneksi, "INSERT INTO isi_profile (tahun_pendidikan,sekolah/univ,jurusan) VALUES ('$tahun_pendidikan','$sekolah','$jurusan')");
    // }
    $insert = mysqli_query($koneksi, "INSERT INTO pengalaman (nama_perusahaan, 	deksripsi_pengalaman, jabatan, deskripsi_jabatan) VALUES ('$nama_perusahaan', '$deksripsi_pengalaman', '$jabatan', '$deskripsi_jabatan')");

    header('location:pengalaman.php?tambah=berhasil');
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($koneksi, "SELECT * FROM pengalaman WHERE id='$id'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

//jika button edit di klik
if (isset($_POST['edit'])) {
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $deksripsi_pengalaman = $_POST['deksripsi_pengalaman'];
    $jabatan = $_POST['jabatan'];
    $deskripsi_jabatan = $_POST['deskripsi_jabatan'];

    // //jika user ingin memasukan gambar
    // if (!empty($_FILES['foto']['name'])) {
    //     $nama_foto = $_FILES['foto']['name'];
    //     $ukuran_foto = $_FILES['foto']['size'];

    //     //tipe foto, png,jpg,etc
    //     $ext = array('png', 'jpg', 'jpeg');
    //     $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

    //     if (!in_array($extFoto, $ext)) {
    //         echo "extention tidak sesuai";
    //         die;
    //     }else{
    //         unlink('upload/' . $rowEdit['foto']);
    //         move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);
    //         //coding ubah/update disini
    //         $update = mysqli_query($koneksi, "UPDATE foto_profile SET nama_profile='$nama_profile', jabatan_profile='$jabatan_profile', foto='$nama_foto' WHERE id='$id'");
    //     }
    // }else {
    //     //jika user tidak ingin memasukan gambar

    // }

    $update = mysqli_query($koneksi, "UPDATE pengalaman SET nama_perusahaan='$nama_perusahaan', deksripsi_pengalaman='$deksripsi_pengalaman', jabatan ='$jabatan', deskripsi_jabatan='$deskripsi_jabatan' WHERE id='$id'");
    header('location:pengalaman.php?ubah=berhasil');
}
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <?php include 'inc/head.php' ?>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include 'inc/sidebar.php' ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php include 'inc/nav.php' ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Pengalaman</div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <div class="col-sm-6">
                                                    <label for="" class="form-label">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="masukan nama perusahaan anda" required value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_perusahaan'] : '' ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="" class="form-label">Deskripsi Pengalaman</label>
                                                    <textarea name="deksripsi_pengalaman" class="form-control" required><?php echo isset($_GET['edit']) ? $rowEdit['deksripsi_pengalaman'] : '' ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-sm-12">
                                                    <label for="" class="form-label">Jabatan</label>
                                                    <input type="text" class="form-control" name="jabatan" placeholder="masukan jabatan anda" required value="<?php echo isset($_GET['edit']) ? $rowEdit['jabatan'] : '' ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-sm-6">
                                                    <label for="" class="form-label">Deskripsi Jabatan</label>
                                                    <textarea name="deskripsi_jabatan" class="form-control"><?php echo isset($_GET['edit']) ? $rowEdit['deskripsi_jabatan'] : '' ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">
                                                    Simpan
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by
                                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                                </div>
                                <div>
                                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                                    <a
                                        href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                        target="_blank"
                                        class="footer-link me-4">Documentation</a>

                                    <a
                                        href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                        target="_blank"
                                        class="footer-link me-4">Support</a>
                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->



        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../asset/admin/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../asset/admin/assets/vendor/libs/popper/popper.js"></script>
        <script src="../asset/admin/assets/vendor/js/bootstrap.js"></script>
        <script src="../asset/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../asset/admin/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../asset/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../asset/admin/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../asset/admin/assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>