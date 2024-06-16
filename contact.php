<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .custom-card {
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s, box-shadow 0.3s;
            display: block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            height: 250px;
            margin-top: 30px;
            width: 300px;
            margin-bottom: 50px;
            margin-left: 50px;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .custom-card .card-body {
            padding: 20px;
        }
        .custom-card img {
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
            border-radius: 10%;
            border: 4px solid #fff;
        }
        .custom-card .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .custom-card .card-text {
            font-size: 1rem;
            color: #555;
        }
        .custom-card .card {
            border: none;
            border-radius: 0;
            background: none;
            transition: transform 0.3s;
        }
        .custom-card .card:hover {
            transform: scale(1.02);
        }
        .card-text-glitch {
        position: relative;
        font-size: 1rem; /* Atur ukuran font sesuai kebutuhan */
        color: #555; /* Atur warna teks sesuai kebutuhan */
        overflow: hidden;
    }

    .card {
    position: relative;
    overflow: hidden;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, transparent 50%, red 50%);
    transition: left 0.3s ease;
    z-index: 1;
}

.card:hover::before {
    left: 100%;
}

.card-text {
    position: relative;
    z-index: 2;
    transition: color 0.3s ease;
}

.card:hover .card-text {
    color: red;
}
    </style>
</head>
<body class="dark-mode">
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
                    <a class="nav-link" href="projects.php"><i class="fas fa-project-diagram"></i> Projects</a>
                </li>
                <li class="nav-item active">
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
                        <li class="nav-item">
                            <a class="nav-link text-white" href="resume.php"><i class="fas fa-file-alt"></i> Resume</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Kontak</h1>
                </div>

              <!-- Contact Cards -->
<div class="row">
    <div class="col-md-4 mb-4">
        <a href="https://twitter.com/BangdigGenZ" class="card text-center custom-card" target="_blank" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <img src="images/twitter-logo.png" alt="Twitter" style="width: 100px; height: 100px;" class="mb-3">
                <h5 class="card-title">Twitter</h5>
                <p class="card-text">twitter.com/BangdigGenZ</p>
            </div>
        </a>
    </div>
    <div class="col-md-4 mb-4">
        <a href="https://www.facebook.com/profile.php?id=61561060291575" class="card text-center custom-card" target="_blank" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <img src="images/facebook-logo.png" alt="Facebook" style="width: 100px; height: 100px;" class="mb-3">
                <h5 class="card-title">Facebook</h5>
                <p class="card-text card-text-glitch" data-text="twitter.com/BangdigGenZ">twitter.com/Bangdig Jiwa</p>
            </div>
        </a>
    </div>
    <div class="col-md-4 mb-4">
        <a href="https://instagram.com/bangdig" class="card text-center custom-card" target="_blank" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <img src="images/instagram-logo.png" alt="Instagram" style="width: 100px; height: 100px;" class="mb-3">
                <h5 class="card-title">Instagram</h5>
                <p class="card-text">instagram.com/Bangdig</p>
            </div>
        </a>
    </div>
    <div class="col-md-4 mb-4">
        <a href="https://github.com/BigBangDig" class="card text-center custom-card" target="_blank" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <img src="images/github-logo.png" alt="Github" style="width: 100px; height: 100px;" class="mb-3">
                <h5 class="card-title">Github</h5>
                <p class="card-text">Github.com/BigBangDig</p>
            </div>
        </a>
    </div>
    <div class="col-md-4 mb-4">
        <a href="https://stackoverflow.com/users/23066561/bangdig" class="card text-center custom-card" target="_blank" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <img src="images/stackoverflow-logo.png" alt="Stackoverflow" style="width: 100px; height: 100px;" class="mb-3">
                <h5 class="card-title">Stack Overflow</h5>
                <p class="card-text">StackOverflow.com/bangdig</p>
            </div>
        </a>
    </div>
    <div class="col-md-4 mb-4">
        <a href="https://www.linkedin.com/in/bang-dig-5b121a2b0/" class="card text-center custom-card" target="_blank" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <img src="images/Linkedin-logo.png" alt="Linkedin" style="width: 100px; height: 100px;" class="mb-3">
                <h5 class="card-title">Linkedin</h5>
                <p class="card-text">Linkedin.com/Bang Dig</p>
            </div>
        </a>
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
