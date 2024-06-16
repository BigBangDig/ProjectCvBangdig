<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom styles for resume page */
        body {
            background-color: #f8f9fa;
        }
        .section-title {
            margin-bottom: 40px;
        }
        .education-item, .experience-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }
        .education-item:hover, .experience-item:hover {
            transform: translateY(-5px);
        }
        .education-item p, .experience-item p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .education-item strong, .experience-item strong {
            font-size: 18px;
            font-weight: 600;
            color: #007bff;
        }
        .timeline-icon {
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            text-align: center;
            font-size: 20px;
            background-color: #007bff;
            color: #fff;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">CV Saya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fas fa-user"></i> Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects"><i class="fas fa-project-diagram"></i> Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="sidebar-sticky text-center">
                <img src="./images/home.jpeg" alt="Foto Saya" class="img-fluid rounded-circle my-3" style="width: 130px; height: 130px; object-fit: cover; border-radius: 50%; border: 2px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    <h4 class="text-white mb-4">Digmaalfasya</h4>
                    <div class="social-links mb-4">
                        <a href="https://twitter.com/BangdigGenZ" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61561060291575" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/bangdig" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/bang-dig-5b121a2b0/" class="text-white mx-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <ul class="nav flex-column mb-4">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php"><i class="fas fa-user"></i> About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="resume.php"><i class="fas fa-file-alt"></i> Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 section-title">Resume</h1>
                </div>

                <!-- Education Section -->
                <section id="education" class="mb-4">
                    <h2 class="section-title">Prestasi</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="education-item">
                                <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
                                <p><strong>Juara Lomba PBB</strong></p>
                                <p>SDN Pondok Ranji 03</p>
                                <p>Tahun 2018</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="education-item">
                                <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
                                <p><strong>Peserta Terbaik LDK</strong></p>
                                <p>SMK Bina Informatika</p>
                                <p>Tahun 2023</p>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak gelar jika diperlukan -->
                    </div>
                </section>

                <!-- Work Experience Section -->
                <section id="experience">
                    <h2 class="section-title">Pengalaman Organisasi</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="experience-item">
                                <div class="timeline-icon"><i class="fas fa-briefcase"></i></div>
                                <p><strong>Ketua Osis</strong></p>
                                <p>SMP Paramarta Unggulan</p>
                                <p>Tahun 2020 - Tahun 2022</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="experience-item">
                                <div class="timeline-icon"><i class="fas fa-briefcase"></i></div>
                                <p><strong>Ketua Divisi Osis</strong></p>
                                <p>SMK Bina Informatika</p>
                                <p>Tahun 2023 - Tahun 2025</p>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak posisi jika diperlukan -->
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
