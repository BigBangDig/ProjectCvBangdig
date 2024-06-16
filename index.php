<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Font family untuk teks */
            background-color: #f8f9fa; /* Warna latar belakang body */
            color: #343a40; /* Warna teks */
            margin-top: 56px; /* Tinggi navbar */
        }

        .content {
            padding-top: 20px; /* Padding atas konten */
        }

        .navbar {
            background-color: rgba(0,0,0,0.7); /* Transparansi background navbar */
        }

        .sidebar {
            background-color: #343a40; /* Warna sidebar */
            padding-top: 20px; /* Padding atas untuk sidebar-sticky */
        }

        .sidebar-sticky {
            padding-top: 20px;
        }

        .nav-link {
            color: #adb5bd; /* Warna default link */
        }

        .nav-link:hover {
            color: #ffffff; /* Warna link saat hover */
        }

        .background-image {
            position: relative;
            background-image: url('./images/home.png'); /* Gambar latar belakang */
            background-size: cover;
            background-position: center;
            height: calc(100vh - 56px); /* Mengisi tinggi viewport dikurangi tinggi navbar */
            width: 100%; /* Mengisi lebar viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden; /* Menyembunyikan gambar latar belakang yang berlebihan */
            perspective: 1000px; /* Perspektif untuk efek parallax */
        }

        .background-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay transparan */
            transform: translateZ(-1px) scale(1.5); /* Efek parallax */
        }

        .hero-content {
            position: relative;
            z-index: 1; /* Agar konten berada di atas overlay */
            text-align: center;
            color: #ffffff; /* Warna teks putih untuk kontras */
            padding: 0 20px; /* Jarak padding untuk konten */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Efek bayangan teks */
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        .btn-primary:hover {
            transform: scale(1.05); /* Perbesar tombol saat dihover */
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2); /* Bayangan halus */
            background-color: #0056b3; /* Warna latar belakang saat dihover */
        }

        .btn-dark {
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        .btn-dark:hover {
            transform: scale(1.05); /* Perbesar tombol saat dihover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        }

        .social-links .fab {
            transition: transform 0.3s;
        }

        .social-links .fab:hover {
            transform: scale(1.2); /* Perbesar ikon saat dihover */
        }

        .dark-mode {
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .dark-mode .sidebar {
            background-color: #1a252f;
        }

        .dark-mode .navbar-dark .navbar-nav .nav-link {
            color: #ecf0f1 !important;
        }

        .dark-mode .btn-primary {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .dark-mode .background-image::before {
            background-color: rgba(0, 0, 0, 0.7); /* Ubah warna overlay transparan */
        }

        .dark-mode .background-image .text-white {
            color: #ecf0f1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">CV Saya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php"><i class="fas fa-project-diagram"></i> Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fas fa-user"></i> Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Kontak</a>
                </li>
                <li class="nav-item">
                    <button onclick="toggleDarkMode()" class="btn btn-dark">
                        <i id="darkModeToggleIcon" class="fas fa-moon"></i> Dark Mode
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="sidebar-sticky text-center">
                    <img src="./images/home.jpeg" alt="Foto Saya" class="img-fluid rounded-circle my-3" style="width: 130px; height: 130px; object-fit: cover; border-radius: 50%; border: 2px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    <h4 class="text-white">Digmaalfasya</h4>
                    <div class="social-links mb-4">
                        <a href="https://twitter.com/BangdigGenZ" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61561060291575" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/bangdig" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/bang-dig-5b121a2b0/" class="text-white mx-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php"><i class="fas fa-user"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Resume.php"><i class="fas fa-file-alt"></i> Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9ml-sm-auto col-lg-10 px-md-4">
                <div class="content">
                    <div class="background-image">
                        <div class="background-overlay"></div>
                        <div class="hero-content text-white text-center">
                            <h1 class="display-4 mb-4">Digmaalfasya</h1>
                            <p class="lead mb-4">Selamat datang di CV Saya. Saya adalah seorang yang bersemangat dalam bidang teknologi dan pengembangan web.</p>
                            <a href="projects.php" class="btn btn-primary btn-lg">Lihat Proyek Saya</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
    // Fungsi untuk mengatur mode gelap atau terang
    function toggleDarkMode() {
        const currentMode = localStorage.getItem('darkMode') === 'true';
        localStorage.setItem('darkMode', !currentMode); // Toggle nilai true/false

        applyDarkMode(!currentMode); // Terapkan perubahan ke seluruh halaman
    }

    // Fungsi untuk menerapkan mode gelap atau terang ke seluruh halaman
    function applyDarkMode(isDarkMode) {
        const icon = document.getElementById('darkModeToggleIcon');
        document.body.classList.toggle('dark-mode', isDarkMode);
        icon.classList.toggle('fa-sun', !isDarkMode);
        icon.classList.toggle('fa-moon', isDarkMode);
    }

    // Cek preferensi mode saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        const darkMode = localStorage.getItem('darkMode') === 'true';
        applyDarkMode(darkMode); // Terapkan mode saat halaman dimuat
    });
    </script>
</body>
</html>
