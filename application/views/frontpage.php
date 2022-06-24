<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Icon -->
    <link href="<?= base_url('frontend'); ?>/img/logo.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('frontend'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('frontend'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('frontend'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('frontend'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('frontend'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('frontend'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('frontend'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('frontend'); ?>/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- Logo-->
            <a href="index.html" class="logo"><img src="<?= base_url('frontend'); ?>/img/logoh.jpg" alt="LOGO" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url('auth') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Survei Kepuasan Layanan Satuan Kerja PDSI</h1>
                    <h2>Kementerian Komunikasi dan Informatika</h2>
                </div>
            </div>
            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-palette-line"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-command-line"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-fingerprint-line"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Pusat Data dan Sarana Informatika berada di bawah dan bertanggung jawab kepada Menteri melalui Sekretaris Jenderal. </p>
                </div>
                <div class="row content">
                    <p>
                        Pusat Data dan Sarana Informatika dipimpin oleh Kepala Pusat. Pusat Data dan Sarana Informatika mempunyai tugas melaksanakan pengelolaan, pengembangan, dan pemanfaatan aset-aset informasi di bidang data dan sarana informatika
                        Dalam melaksanakan tugas sebagaimana yang dimaksud di atas, Pusat Data dan Sarana Informatika menyelenggarakan fungsi sebagai berikut :
                    </p>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="ri-check-double-line"></i> Penyusunan kebijakan teknis di bidang infrastruktur, sistem, dan data informatika.</li>
                            <li><i class="ri-check-double-line"></i> Pelaksanaan di bidang infrastruktur, sistem, dan data informatika.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="ri-check-double-line"></i> Pemantauan, evaluasi, dan pelaporan di bidang infrastruktur, sistem, dan data informatika.</li>
                            <li><i class="ri-check-double-line"></i> Pelaksanaan administrasi pusat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Place</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.6637983617607!2d106.8226487!3d-6.1757433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d47c71fdaf%3A0x56d2a62dc19ddbc9!2sMinistry%20of%20Communications%20and%20Informatics!5e0!3m2!1sen!2sid!4v1644869520129!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <section id="contact" class="contact">
        </section>
        <!-- End Contact Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>OnePage</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
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
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('frontend'); ?>/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url('frontend'); ?>/vendor/aos/aos.js"></script>
    <script src="<?= base_url('frontend'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('frontend'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('frontend'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('frontend'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('frontend'); ?>/vendor/php-email-form/validate.js"></script>


    <!-- Template Main JS File -->
    <script src="<?= base_url('frontend'); ?>/js/main.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3a6c36157b.js" crossorigin="anonymous"></script>

</body>

</html>