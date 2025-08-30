<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl. Pendidikan No. 123, Jakarta</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 07.00 AM - 05.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>(021) 1234567</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-school text-primary me-2"></i>SMA Wijaya Harapan Bangsa</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url('/'); ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= base_url('about'); ?>" class="nav-item nav-link">About Us</a>
                <a href="<?= base_url('activities'); ?>" class="nav-item nav-link">Activities</a>
                <a href="<?= base_url('news'); ?>" class="nav-item nav-link">News</a>
                <a href="<?= base_url('contact'); ?>" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">News</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- News Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h6 class="text-primary text-uppercase mb-2">Berita Terbaru</h6>
                <h1 class="display-6 mb-4">SMA Wijaya Harapan Bangsa</h1>
            </div>

            <div class="row g-4">
                <!-- News 1 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded shadow-sm overflow-hidden h-100">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/team-1.jpg') ?>" alt="Seminar Pendidikan">
                        <div class="p-4">
                            <h4 class="mb-3">Seminar Pendidikan</h4>
                            <p>
                                SMA WHB menggelar seminar bertema <b>"Menjadi Generasi Yang Baik"</b> dengan menghadirkan
                                narasumber dari kalangan akademisi dan praktisi pendidikan. Seminar ini bertujuan untuk
                                membekali siswa dengan wawasan mengenai pentingnya karakter, integritas, dan semangat belajar.
                                Acara berlangsung meriah dengan sesi tanya jawab yang interaktif, serta diikuti lebih dari 500 peserta.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded shadow-sm overflow-hidden h-100">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/team-2.jpg') ?>" alt="Prestasi Siswa">
                        <div class="p-4">
                            <h4 class="mb-3">Prestasi Siswa</h4>
                            <p>
                                Salah satu siswa SMA WHB berhasil meraih <b>Juara 1 Olimpiade Sains tingkat provinsi</b>.
                                Prestasi ini menjadi bukti bahwa kualitas pendidikan dan bimbingan di sekolah
                                mampu melahirkan generasi berprestasi. Ke depan, sekolah akan terus mendukung siswa dalam
                                berbagai ajang lomba akademik maupun non-akademik agar semakin banyak prestasi yang diraih.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- News 3 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded shadow-sm overflow-hidden h-100">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/team-3.jpg') ?>" alt="Kegiatan Sosial">
                        <div class="p-4">
                            <h4 class="mb-3">Kegiatan Sosial</h4>
                            <p>
                                Dalam rangka memperingati Hari Pendidikan Nasional, guru dan siswa SMA WHB
                                mengadakan <b>bakti sosial di desa sekitar sekolah</b>. Kegiatan ini meliputi pembagian sembako,
                                layanan kesehatan gratis, serta kegiatan belajar bersama anak-anak desa.
                                Melalui aksi sosial ini, sekolah ingin menanamkan nilai kepedulian dan gotong royong
                                kepada seluruh siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- News 4 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light rounded shadow-sm overflow-hidden h-100">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/team-4.jpg') ?>" alt="Program Baru">
                        <div class="p-4">
                            <h4 class="mb-3">Program Baru</h4>
                            <p>
                                SMA WHB resmi meluncurkan <b>program ekstrakurikuler robotik</b> untuk siswa. 
                                Program ini bertujuan mengembangkan kreativitas dan keterampilan di bidang teknologi modern.
                                Siswa akan diajarkan dasar-dasar elektronika, pemrograman, dan desain robot.
                                Dengan adanya program ini, sekolah berharap dapat mencetak generasi yang siap menghadapi era digital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-school text-white me-2"></i>SMA Wijaya Harapan Bangsa</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Pendidikan No. 123, Jakarta</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>infowhb@gmail.com</p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Activities</a>
                    <a class="btn btn-link" href="">News</a>
                    <a class="btn btn-link" href="">Contact</a>
                </div>

                <!-- Popular Links -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">Contact</a>
                    <a class="btn btn-link" href="">Activities</a>
                </div>

                <!-- Newsletter / Social Media -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
