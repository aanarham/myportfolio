<?php
$pageTitle = 'Beranda - Arham Nugraha';
$currentPage = 'home';
include 'includes/header.php';
?>
<div class="home-content">
    <div class="home-text">
        <h2 class="main-heading">Saya adalah AanArham</h2>
        <p class="sub-text">100% Portfolio Website | Dibuat oleh Arham Nugraha</p>
        <a href="work.php" class="btn-portfolio">LIHAT PORTOFOLIO <span>→</span></a>
    </div>
    <div class="home-image">
        <img src="images/main-image.jpg" alt="Arham Nugraha - Supervisor PT Valor Inspiration Pesona" onerror="this.src='https://via.placeholder.com/450x600?text=Arham+Nugraha'">
    </div>
    <div class="pagination-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
