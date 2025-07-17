<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Ramo - Indekos & Kontrakan</title>
    <link rel="icon" href="assets/img/rumahramoicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Meta Tags SEO -->
    <meta name="description" content="Rumah Ramo menawarkan indekos dan kontrakan nyaman dengan harga terjangkau. Temukan hunian ideal Anda di sini!">
    <meta name="keywords" content="indekos, kontrakan, rumah sewa, petakan, sewa rumah murah, rumah kontrakan, tempat tinggal nyaman">
    <meta name="author" content="Rumah Ramo">
    <meta name="robots" content="index, follow">

    <!-- Open Graph (Untuk Social Media) -->
    <meta property="og:title" content="Rumah Ramo - Indekos & Kontrakan">
    <meta property="og:description" content="Rumah Ramo menawarkan indekos dan kontrakan nyaman dengan harga terjangkau. Temukan hunian ideal Anda di sini!">
    <meta property="og:image" content="https://rumahramo.web.id/assets/img/rumahramo.jpg">
    <meta property="og:url" content="https://rumahramo.web.id">
    <meta property="og:type" content="website">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Poppins CSS */
        .poppins-thin {
        font-family: "Poppins", serif;
        font-weight: 100;
        font-style: normal;
        }

        .poppins-extralight {
        font-family: "Poppins", serif;
        font-weight: 200;
        font-style: normal;
        }

        .poppins-light {
        font-family: "Poppins", serif;
        font-weight: 300;
        font-style: normal;
        }

        .poppins-regular {
        font-family: "Poppins", serif;
        font-weight: 400;
        font-style: normal;
        }

        .poppins-medium {
        font-family: "Poppins", serif;
        font-weight: 500;
        font-style: normal;
        }

        .poppins-semibold {
        font-family: "Poppins", serif;
        font-weight: 600;
        font-style: normal;
        }

        .poppins-bold {
        font-family: "Poppins", serif;
        font-weight: 700;
        font-style: normal;
        }

        .poppins-extrabold {
        font-family: "Poppins", serif;
        font-weight: 800;
        font-style: normal;
        }

        .poppins-black {
        font-family: "Poppins", serif;
        font-weight: 900;
        font-style: normal;
        }

        .poppins-thin-italic {
        font-family: "Poppins", serif;
        font-weight: 100;
        font-style: italic;
        }

        .poppins-extralight-italic {
        font-family: "Poppins", serif;
        font-weight: 200;
        font-style: italic;
        }

        .poppins-light-italic {
        font-family: "Poppins", serif;
        font-weight: 300;
        font-style: italic;
        }

        .poppins-regular-italic {
        font-family: "Poppins", serif;
        font-weight: 400;
        font-style: italic;
        }

        .poppins-medium-italic {
        font-family: "Poppins", serif;
        font-weight: 500;
        font-style: italic;
        }

        .poppins-semibold-italic {
        font-family: "Poppins", serif;
        font-weight: 600;
        font-style: italic;
        }

        .poppins-bold-italic {
        font-family: "Poppins", serif;
        font-weight: 700;
        font-style: italic;
        }

        .poppins-extrabold-italic {
        font-family: "Poppins", serif;
        font-weight: 800;
        font-style: italic;
        }

        .poppins-black-italic {
        font-family: "Poppins", serif;
        font-weight: 900;
        font-style: italic;
        }

        h1, h2, h5, p, a { font-family: 'Poppins', serif; }
        /* Navbar transparan awal, berubah menjadi putih saat discroll */
        .navbar {
            background: transparent !important;
            transition: background 0.3s, box-shadow 0.3s;
        }

        .navbar.scrolled {
            background: white !important;
            box-shadow: 0 2px 10px rgba(216, 162, 162, 0.1);
        }

        .navbar.scrolled .navbar-brand {
            color: black !important;
        }

        /* Ukuran logo di navbar */
        .navbar-logo {
            height: 55px; /* Sesuaikan tinggi gambar */
            width: auto; /* Sesuaikan lebar gambar */
        }

        @font-face {
            font-family: 'Tomo Acuario';
            src: url('assets/fonts/TomoAcuario-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .navbar-brand {
            font-family: 'Tomo Acuario', sans-serif;
            font-size: 1.8rem;
            font-weight: normal;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Jarak antara logo dan teks */
        }

        /* Hero Section Fullscreen */
        .hero {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            transition: background-image 1s ease-in-out; /* Smooth transition */
            margin-bottom: 80px;
        }

        /* Pindahkan scroll ke bagian bawah hero section */
        .scroll-down {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        /* Mouse icon dengan alas putih */
        .mouse-icon {
            width: 30px;
            height: 50px;
            border: 2px solid black; /* Warna hitam */
            border-radius: 15px;
            position: relative;
            margin: 0 auto;
            background: white; /* Warna alas putih hanya untuk ikon */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Wheel animation */
        .wheel {
            width: 4px;
            height: 10px;
            background-color: black; /* Warna hitam */
            border-radius: 2px;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            animation: scroll 1.5s infinite;
        }

        /* Animasi scrolling */
        @keyframes scroll {
            0% { top: 10px; opacity: 1; }
            50% { top: 20px; opacity: 0.5; }
            100% { top: 10px; opacity: 1; }
        }

        /* Teks scroll */
        .scroll-text { 
            margin-top: 10px;
            font-size: 1rem;
            color: white; /* Warna putih */
            text-align: center;
            font-weight: bold;
        }


        /* Menyembunyikan ikon scroll saat discroll */
        .scroll-down.hide {
            opacity: 0;
            pointer-events: none;
            transform: translateY(-50%, 20px);
        }

        /* Overlay untuk memperjelas teks */
        .hero::before {
            display: none;
        }

        .hero-content {
            display: none;
        }
        /* Floating Button Styles */
        .floating-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }
        .floating-buttons a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: white;
            font-size: 24px;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .floating-buttons a:hover {
            transform: scale(1.1);
        }
        .whatsapp { background: #25D366; }
        .instagram { background: #E4405F; }

        #mainContainer {
            margin-bottom: 80px;
        }

        /* Menyamakan lebar Google Maps dengan dua card */
        #googleMap {
            height: 450px; /* Sesuaikan tinggi jika perlu */
            border-radius: 10px; /* Opsional: sudut membulat */
        }

        /* Sesuaikan tinggi card agar proporsional dengan maps */
        .card {
            min-height: 450px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .card {
                min-height: auto;
                height: auto;
            }
        }

        .map-container {
            margin-bottom: 80px; /* Jarak antara Maps dan Footer */
        }

        /* Carousel styling */
        .carousel-item img {
            max-height: 300px;
            object-fit: cover;
            cursor: pointer;
            border-radius: 10px;
        }

        /* Overlay styling */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1050;
            overflow: hidden;
        }
        .overlay img {
            max-width: 90%;
            max-height: 80%;
            cursor: grab;
        }
        .overlay.active {
            display: flex;
        }

        /* Close button */
        .overlay .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }

        /* Navigation buttons */
        .overlay .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }
        .overlay .nav-btn.left {
            left: 30px;
        }
        .overlay .nav-btn.right {
            right: 30px;
        }

        /* Caption for current image index */
        .overlay .caption {
            position: absolute;
            bottom: 20px;
            color: white;
            font-size: 1.2rem;
        }

        /* Blur background */
        .blur-container {
            filter: blur(5px);
            pointer-events: none;
        }

        /* Disable scroll */
        body.no-scroll {
            overflow: hidden;
        }

        .container iframe {
            max-width: 100%;
            border-radius: 10px; /* Opsional: Tambahkan efek sudut membulat */
        }

        /* Atur footer */
        footer.bg-dark {
            margin-top: 80px;
            padding: 2rem 0 !important; /* Tambahkan padding atas dan bawah */
            min-height: 100px; /* Beri tinggi minimum */
            display: flex;
            align-items: center; /* Pusatkan vertikal */
            justify-content: center; /* Pusatkan horizontal */
            flex-direction: column; /* Untuk layout kolom jika ada konten tambahan */
        }

        /* Media query untuk mobile */
        @media (max-width: 768px) {
            .hero,
            #mainContainer,
            .map-container {
                margin-bottom: 50px;
            }
            
            footer.bg-dark {
                margin-top: 50px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/img/rumahramologo.png" alt="Logo Rumah Ramo" class="navbar-logo">
            </a>
        </div>
    </nav>

    <!-- Floating Contact Buttons -->
    <div class="floating-buttons">
        <a href="https://wa.me/628159969050" target="_blank" class="whatsapp">
            <i class="bi bi-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/rumahramo" target="_blank" class="instagram">
            <i class="bi bi-instagram"></i>
        </a>
    </div>

    <!-- Hero Section -->
    <div id="heroSection" class="hero" style="background-image: url('assets/img/bg1.jpg');">
        <div class="hero-content">
            <h1>Selamat Datang di Rumah Ramo</h1>
            <p class="lead">Temukan rumah dan petakan yang sesuai dengan kebutuhan Anda!</p>
        </div>
        <!-- Tambahkan ikon scroll di tengah bawah -->
        <div class="scroll-down">
            <div class="mouse-icon">
                <div class="wheel"></div>
            </div>
            <p class="scroll-text">SCROLL</p>
        </div>
    </div>

    <!-- Kategori -->
    <div id="mainContainer" class="container">
        <div class="row text-center">
            <!-- Rumah -->
            <div class="col-md-6">
                <div class="card mb-4 position-relative">
                    <div id="carouselRumah" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/a1.jpg" class="d-block w-100" alt="Rumah 1" onclick="showImage(this, 0, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a2.jpg" class="d-block w-100" alt="Rumah 2" onclick="showImage(this, 1, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a3.jpg" class="d-block w-100" alt="Rumah 3" onclick="showImage(this, 2, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a4.jpg" class="d-block w-100" alt="Rumah 4" onclick="showImage(this, 3, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a5.jpg" class="d-block w-100" alt="Rumah 5" onclick="showImage(this, 4, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a6.jpg" class="d-block w-100" alt="Rumah 6" onclick="showImage(this, 5, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a7.jpg" class="d-block w-100" alt="Rumah 7" onclick="showImage(this, 6, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/a8.jpg" class="d-block w-100" alt="Rumah 8" onclick="showImage(this, 7, 'Rumah', ['a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg', 'a6.jpg', 'a7.jpg', 'a8.jpg'])">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRumah" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselRumah" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title poppins-semibold">Rumah</h5>
                        <p class="card-text text-muted poppins-medium">Rp2.000.000/bulan</p>
                        <a href="https://wa.me/628159969050?text=Halo,%20saya%20tertarik%20untuk%20menanyakan%20tentang%20ketersediaan%20rumah%20sewa." class="btn btn-success poppins-regular" target="_blank">Hubungi via WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Petakan -->
            <div class="col-md-6">
                <div class="card mb-4 position-relative">
                    <div id="carouselPetakan" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/b1.jpg" class="d-block w-100" alt="Petakan 1" onclick="showImage(this, 0, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b2.jpg" class="d-block w-100" alt="Petakan 2" onclick="showImage(this, 1, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b3.jpg" class="d-block w-100" alt="Petakan 3" onclick="showImage(this, 2, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b4.jpg" class="d-block w-100" alt="Petakan 4" onclick="showImage(this, 3, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b5.jpg" class="d-block w-100" alt="Petakan 5" onclick="showImage(this, 4, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b6.jpg" class="d-block w-100" alt="Petakan 6" onclick="showImage(this, 5, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b7.jpg" class="d-block w-100" alt="Petakan 7" onclick="showImage(this, 6, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b8.jpg" class="d-block w-100" alt="Petakan 8" onclick="showImage(this, 7, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b9.jpg" class="d-block w-100" alt="Petakan 9" onclick="showImage(this, 8, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b10.jpg" class="d-block w-100" alt="Petakan 10" onclick="showImage(this, 9, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b11.jpg" class="d-block w-100" alt="Petakan 11" onclick="showImage(this, 10, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/b12.jpg" class="d-block w-100" alt="Petakan 12" onclick="showImage(this, 11, 'Petakan', ['b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg', 'b11.jpg', 'b12.jpg' ])">
                            </div>     
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPetakan" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPetakan" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title poppins-semibold">Petakan</h5>
                        <p class="card-text text-muted poppins-medium">Rp850.000/bulan</p>
                        <a href="https://wa.me/628159969050?text=Halo,%20saya%20tertarik%20untuk%20menanyakan%20tentang%20ketersediaan%20rumah%20sewa." class="btn btn-success poppins-regular" target="_blank">Hubungi via WhatsApp</a>
                    </div>
                </div>      
            </div>        
        </div>
    </div>

    <!-- Google Maps -->
    <div class="container my-5 map-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <iframe id="googleMap" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3134.2018666131007!2d107.31255377378152!3d-6.327366561910332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977541c2acdd7%3A0x96b91fc241ce1ad9!2sRumah%20Ramo%20-%20Indekos%20dan%20Kontrakan!5e1!3m2!1sid!2sid!4v1738122934603!5m2!1sid!2sid" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div id="imageOverlay" class="overlay">
        <i class="bi bi-x-circle close-btn" onclick="closeImage()"></i>
        <i class="bi bi-arrow-left-circle nav-btn left" onclick="navigateImage(-1)"></i>
        <i class="bi bi-arrow-right-circle nav-btn right" onclick="navigateImage(1)"></i>
        <img id="overlayImage" src="" alt="Full Image">
        <div id="imageCaption" class="caption"></div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="poppins-light">© 2025 Rumah Ramo. All Rights Reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const heroSection = document.getElementById("heroSection");
        const images = ["assets/img/bg1.jpg", "assets/img/bg2.jpg"];
        let index = 0;

        setInterval(() => {
            index = (index + 1) % images.length;
            heroSection.style.backgroundImage = `url('${images[index]}')`;
        }, 5000); // Ganti setiap 5 detik
    </script>
    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            const scrollDownIcon = document.querySelector('.scroll-down');
            
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
                scrollDownIcon.classList.add("hide");
            } else {
                navbar.classList.remove("scrolled");
                scrollDownIcon.classList.remove("hide");
            }
        });

        document.querySelector('.scroll-down').addEventListener('click', function() {
            window.scrollTo({
                top: document.querySelector('#mainContainer').offsetTop,
                behavior: 'smooth'
            });
        });

        let currentImageIndex = 0;
        let currentImageSet = [];
        const overlay = document.getElementById('imageOverlay');
        const overlayImage = document.getElementById('overlayImage');
        const imageCaption = document.getElementById('imageCaption');

        function showImage(imgElement, index, title, images) {
            currentImageIndex = index;
            currentImageSet = images;
            updateOverlay();
            overlay.classList.add('active');
            document.getElementById('mainContainer').classList.add('blur-container');
            document.body.classList.add('no-scroll'); // Disable scrolling
        }

        function closeImage() {
            overlay.classList.remove('active');
            document.getElementById('mainContainer').classList.remove('blur-container');
            document.body.classList.remove('no-scroll'); // Enable scrolling
        }

        function navigateImage(direction) {
            currentImageIndex += direction;
            if (currentImageIndex < 0) currentImageIndex = 0;
            if (currentImageIndex >= currentImageSet.length) currentImageIndex = currentImageSet.length - 1;
            updateOverlay();
        }

        function updateOverlay() {
            overlayImage.src = `assets/img/${currentImageSet[currentImageIndex]}`;
            imageCaption.textContent = `${currentImageIndex + 1} / ${currentImageSet.length}`;
        }
    </script>
</body>
</html>
