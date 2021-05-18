<?php
include "session.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>GG Gaming's Official Website</title>
    <link rel="stylesheet" href="Assets_UAS/css/style.css">
</head>

<body>
    <header>
    <nav class="navbar">
        <a href="./home.php"><img class="navbar-logo" src="Assets_UAS/img/logo.png" alt="Gambar Logo"></a>
        <?php
            echo "<span class='hello-user'>Hello, <em><strong>$_SESSION[loginusername]</strong></em></span>";
        ?>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contacts">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </header>
    <main>
    <img class="featured-picture" src="Assets_UAS/img/gambar_1.png" alt="Gambar Featured">

    <section id="profile">
        <img class="profile-logo" src="Assets_UAS/img/logo.png" alt="Logo GG Gaming">
        <p class="profile-text"><strong>GG Gaming</strong> hadir disini untuk menyediakan beragam produk peripheral gaming yang akan membuat momen gaming anda lebih menyenangkan. Disini Anda dapat memilih berbagai peripheral yang cocok untuk kebutuhan Anda selama gaming dengan
            harga yang layak dan kualitas yang <em>mantab</em>.<br /><br />
            <strong>GG Gaming</strong> adalah toko yang berlokasi di Sillicon Valley, California. GG Gaming kini sudah mempunyai 50 cabang yang tersebar ke seluruh dunia dan baru saja menghadirkan cabang terbaru di Bandung, Indonesia.</p>
    </section>

    <div id="slider">
        <figure>
            <img src="Assets_UAS/img/logitech.png">
            <img src="Assets_UAS/img/razer.png">
            <img src="Assets_UAS/img/steelseries.png">
            <img src="Assets_UAS/img/corsair.png">
            <img src="Assets_UAS/img/hyperx.png">
        </figure>
    </div>

    <section id="faq">
        <div>
            <p class="judul-faq">FAQ</p>
            <br /><br />
            <p class="isi-faq">Q : Mengapa Harus Beli di GG Gaming ?<br />A : Hal yang membedakan adalah layanan produk di toko kami dengan layanan produk pada toko lain yang sejenis. Pertama, harga yang terjangkau. Kedua, kami melayani retur jika Anda tidak puas dengan
                produk yang kami jual. <br /><br /> Q : Kapan jadwal operasional toko GG gaming ?<br /> A : Toko kami mulai beroperasi pada jam 07:00 - 22:00 WIB pada hari Senin - Jumat.<br /><br /> Q : Apakah GG gaming menyediakan garansi toko ?<br /> A : Iya,
                kami melayani garansi selama 1 tahun jika terdapat masalah terhadap produk Anda.</p>
        </div>
    </section>
    </main>

    <footer>
    <section id="contacts">
        <a href="./home.php"><img class="navbar-logo" src="Assets_UAS/img/logo.png" alt="Gambar Logo"></a>
        <p class="isi-contacts"><strong>CONTACTS :</strong><br />(+62)8182777562<br /> www.gggaming.com<br /> Jalan Braga No 5</p>
    </section>
    </footer>
    
</body>

</html>