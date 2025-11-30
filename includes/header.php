<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Arham Nugraha - Portfolio'; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="profile-image">
                    <img src="images/profil.jpg" alt="Arham Nugraha" onerror="this.src='images/profile.jpg'">
                </div>
                <div class="profile-info">
                    <h1>Arham Nugraha</h1>
                    <p class="profile-title">SPV DI PT VALOR INSPIRATION PESONA</p>
                    <p class="profile-location">Makassar, Sulawesi Selatan</p>
                    <p class="profile-nickname">Biasa dipanggil <strong>Aan</strong></p>
                </div>
            </div>
            
            <nav class="navigation">
                <ul>
                    <li><a href="index.php" class="<?php echo (isset($currentPage) && $currentPage == 'home') ? 'active' : ''; ?>">BERANDA</a></li>
                    <li><a href="about.php" class="<?php echo (isset($currentPage) && $currentPage == 'about') ? 'active' : ''; ?>">TENTANG</a></li>
                    <li><a href="services.php" class="<?php echo (isset($currentPage) && $currentPage == 'services') ? 'active' : ''; ?>">LAYANAN</a></li>
                    <li><a href="skills.php" class="<?php echo (isset($currentPage) && $currentPage == 'skills') ? 'active' : ''; ?>">KEAHLIAN</a></li>
                    <li><a href="education.php" class="<?php echo (isset($currentPage) && $currentPage == 'education') ? 'active' : ''; ?>">PENDIDIKAN</a></li>
                    <li><a href="experience.php" class="<?php echo (isset($currentPage) && $currentPage == 'experience') ? 'active' : ''; ?>">PENGALAMAN</a></li>
                    <li><a href="work.php" class="<?php echo (isset($currentPage) && $currentPage == 'work') ? 'active' : ''; ?>">PORTOFOLIO</a></li>
                    <li><a href="project.php" class="<?php echo (isset($currentPage) && $currentPage == 'project') ? 'active' : ''; ?>">PROYEK</a></li>
                    <li><a href="contact.php" class="<?php echo (isset($currentPage) && $currentPage == 'contact') ? 'active' : ''; ?>">KONTAK</a></li>
                </ul>
            </nav>
            
            <footer class="sidebar-footer">
                <p>© Hak Cipta ©<?php echo date('Y'); ?> Semua hak dilindungi | Template dibuat dengan asal 😂 oleh Arham Nugraha</p>
            </footer>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
