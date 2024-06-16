<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        html, body {
            height: 100%;
        }
        .container-fluid {
            display: flex;
            flex-wrap: nowrap;
            height: 100%;
        }
        #sidebar {
            height: 100%;
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
                    <a class="nav-link" href="resume.php"><i class="fas fa-file-alt"></i> Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Kontak</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="projects.php"><i class="fas fa-project-diagram"></i> Proyek</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid">
        <div class="row flex-grow-1">
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
                            <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php"><i class="fas fa-user"></i> Tentang Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="resume.php"><i class="fas fa-file-alt"></i> Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php"><i class="fas fa-envelope"></i> Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Proyek</h1>
                </div>

                <!-- Project Cards -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="./images/book.png" class="card-img-top" alt="Proyek 1">
                            <div class="card-body">
                                <h5 class="card-title">Penyewaan Buku</h5>
                                <p class="card-text">Menggunakan Framework Laravel 8 dengan banyak fitur seperti pembelian dan lainnya (masih dalam pengembangan).</p>
                                <a href="https://github.com/BigBangDig/book-rent-main" class="btn btn-primary" target="_blank">Lihat di GitHub</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="./images/ecoomerce.png" class="card-img-top" alt="Proyek 2">
                            <div class="card-body">
                                <h5 class="card-title">E-commerce</h5>
                                <p class="card-text">Menggunakan Framework Laravel 9 yang terhubung dengan aplikasi Android untuk CRUD dan fitur lainnya.</p>
                                <a href="https://github.com/BigBangDig/CRUD" class="btn btn-primary" target="_blank">Lihat di GitHub</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="./images/archive2.png" class="card-img-top" alt="Proyek 3">
                            <div class="card-body">
                                <h5 class="card-title">Gudang</h5>
                                <p class="card-text">Menggunakan Framework React dengan fitur login, penambahan data secara statis, dan lainnya tanpa database.</p>
                                <a href="https://github.com/BigBangDig/Archive2" class="btn btn-primary" target="_blank">Lihat di GitHub</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan card lainnya sesuai kebutuhan -->
                </div>
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
