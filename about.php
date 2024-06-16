<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom styles for about page */
        body {
            background-color: #f8f9fa;
        }
        .section-title {
            margin-bottom: 40px;
        }
        .profile-image {
            width: 100%;
            max-width: 300px;
            border-radius: 50%;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .profile-image:hover {
            transform: scale(1.1);
        }
        .skill-list {
            list-style-type: none;
            padding-left: 0;
        }
        .skill-list li {
            margin-bottom: 10px;
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
                <li class="nav-item active">
                    <a class="nav-link" href="about.php"><i class="fas fa-user"></i> Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php"><i class="fas fa-project-diagram"></i> Projects</a>
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
                        <li class="nav-item active">
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

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 section-title">Tentang Saya</h1>
                </div>
                <div class="row">
                <div class="col-lg-4 mb-4 text-center">
    <img src="./images/about.png" alt="Foto Saya" class="profile-image" style="width: 300px; height: 300px; object-fit: cover; border-radius: 50%;">
    <h4 class="mt-3">Digmaalfasya</h4>
</div>
                <div class="col-lg-8">
                        <p class="lead mb-4">
                            Saya adalah siswa di SMK Bina Informatika yang sangat tertarik pada dunia pemrograman. Saya memiliki minat yang besar terhadap berbagai bahasa pemrograman dan selalu ingin belajar hal-hal baru.
                        </p>
                        <h3>Hard Skill</h3>
                        <ul class="skill-list mb-4">
                            <li>
                                <i class="fab fa-react"></i> React Js
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                </div>
                            </li>
                            <li>
                                <i class="fab fa-laravel"></i> Laravel 8
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                </div>
                            </li>
                            <li>
                                <i class="fab fa-java"></i> Java Android
                                <div                                    class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                </div>
                            </li>
                        </ul>

                        <h3>Soft Skill</h3>
<div class="row mb-4">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Leadership</h5>
                <p class="card-text">Saya meyakini bahwa saya memiliki jiwa kepemimpinan.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Menguasai Public Speaking</h5>
                <p class="card-text">Saya dapat berbicara didepan umum saat ada suatu acara.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Memiliki Jiwa Semangat Tinggi</h5>
                <p class="card-text">Saya suka hal yang menantang dan semangat yang tinggi.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
</div>
                        <!-- Widget untuk Pendidikan -->
                        <div class="mb-4">
                            <h3>Pendidikan</h3>
                            <ul class="list-group">
                                <li class="list-group-item">SMK Bina Informatika - Jurusan Rekayasa Perangkat Lunak (XI RPL)</li>
                                <li class="list-group-item">SMP Paramarta Unggulan - (Lulus 2022)</li>
                                <li class="list-group-item">SDN Pondok Ranji 03 - (Lulus 2018)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
