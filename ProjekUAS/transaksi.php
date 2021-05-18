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
            <li><a href="home.php#faq">FAQ</a></li>
            <li><a href="home.php#contacts">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </header>

    <div style="margin: 50px auto">
    <center><table class="table-catalog">
<?php

$takedata = "SELECT * FROM transaksi WHERE username = '$_SESSION[loginusername]'";
$result = mysqli_query($connection, $takedata);
while ($show = mysqli_fetch_array($result)) {
    echo "
    
    <tr>
        <td class='data-table'>$show[distributor]</td>
        <td class='data-table'>$show[nama_barang]</td>
        <td class='data-table'> Rp. $show[harga_barang]</td>
    </tr>";
}
    echo "
    </table>";
?>
    </div>
    </body>
</html>