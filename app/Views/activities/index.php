<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Activities</title>
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Activities</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Activities</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Activities Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Kegiatan Unggulan di SMA Harapan Bangsa</h6>
                <h1 class="display-6 mb-4">"Mengasah Potensi, Menggapai Prestasi!"</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Pramuka -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100 shadow-sm rounded">
                        <img class="img-fluid" style="width: 100%; height: 220px; object-fit: cover;" src="<?= base_url('assets/img/courses-1.jpg') ?>" alt="Pramuka">
                        <div class="text-center p-4">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-3">Ekstrakurikuler</div>
                            <h5 class="mb-3">Pramuka</h5>
                            <p>
                                Pramuka adalah kegiatan wajib yang menanamkan nilai disiplin, kemandirian, dan kepemimpinan. 
                                Melalui berbagai kegiatan seperti perkemahan, pelatihan baris-berbaris, pertolongan pertama, 
                                hingga simulasi bencana, siswa dilatih untuk menjadi pribadi yang tangguh dan peduli terhadap lingkungan.
                                Selain itu, kegiatan Pramuka juga menjadi ajang mempererat kebersamaan dan solidaritas antar siswa 
                                melalui semangat kerja sama tim.
                            </p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-map text-primary me-2"></i>Lapangan Sekolah</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>Setiap Sabtu</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Olahraga -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100 shadow-sm rounded">
                        <img class="img-fluid" style="width: 100%; height: 220px; object-fit: cover;" src="<?= base_url('assets/img/courses-2.jpg') ?>" alt="Olahraga">
                        <div class="text-center p-4">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-3">Kegiatan Olahraga</div>
                            <h5 class="mb-3">Basket, Futsal, Badminton</h5>
                            <p>
                                Olahraga menjadi salah satu kegiatan favorit siswa untuk menjaga kesehatan jasmani sekaligus 
                                mengasah keterampilan dalam bidang olahraga. Dengan tim basket, futsal, dan badminton yang aktif 
                                mengikuti kejuaraan tingkat kota maupun provinsi, siswa tidak hanya berolahraga untuk kesehatan 
                                tetapi juga berkompetisi secara sportif. Fasilitas GOR modern dan dukungan pelatih berpengalaman 
                                menjadikan kegiatan olahraga di sekolah ini sebagai wadah untuk mencetak atlet berprestasi.
                            </p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-map text-primary me-2"></i>GOR Sekolah</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>Senin, Rabu, Sabtu</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Sains & Teknologi -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100 shadow-sm rounded">
                        <img class="img-fluid" style="width: 100%; height: 220px; object-fit: cover;" src="<?= base_url('assets/img/courses-3.jpg') ?>" alt="Sains & Teknologi">
                        <div class="text-center p-4">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-3">Klub</div>
                            <h5 class="mb-3">Sains & Teknologi</h5>
                            <p>
                                Klub Sains & Teknologi adalah wadah siswa yang memiliki minat besar di bidang riset, eksperimen, 
                                dan inovasi teknologi. Di sini, siswa dapat mengembangkan kreativitas dengan membuat karya ilmiah, 
                                robotika, hingga aplikasi sederhana. Klub ini secara rutin mengikuti lomba penelitian ilmiah remaja 
                                (LIPI), olimpiade sains, dan kompetisi teknologi tingkat nasional. Tujuan utama klub ini adalah 
                                menumbuhkan rasa ingin tahu, daya analisis, dan semangat berinovasi yang relevan dengan perkembangan zaman.
                            </p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-map text-primary me-2"></i>Laboratorium</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>Setiap Senin</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Activities End -->


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
