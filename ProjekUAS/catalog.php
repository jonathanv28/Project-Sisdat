<?php
include "session.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GG Gaming's Catalog Page</title>
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
    <div class="box-table" style="margin: 50px auto">
        <figure class="remah-remah"></figure>
        <center><table class="table-catalog" border="1">
<?php

$takedata = "SELECT * FROM barang";
$result = mysqli_query($connection, $takedata);
while ($show = mysqli_fetch_array($result)) {
    echo "
    
    <tr>
        <td class='data-table'>$show[nama_distributor]</td>
        <td class='data-table'>$show[nama_barang]</td>
        <td class='data-table'>$show[stok_barang]</td>
        <td class='data-table'> Rp. $show[harga_barang]</td>
        <td><form method='POST'>
        <input type='hidden' name='id_barang' value='$show[id_barang]'/>
        <input type='hidden' name='nama_distributor' value='$show[nama_distributor]'/>
        <input type='hidden' name='nama_barang' value='$show[nama_barang]'/>
        <input type='hidden' name='harga_barang' value='$show[harga_barang]'/>
        <input type='hidden' name='stok_barang' value='$show[stok_barang]'/>
        <button class='add-button' type='submit' name='submit';'> ADD </button>
        </form></td>
    </tr>

    ";
}

?>
        </table>
    </div>
    <a href="transaksi.php" class="check-trans">CHECK TRANSACTION</a>
<?php
    if(isset($_POST['submit'])) {

        $sql = "INSERT INTO transaksi SET
        username = '$_SESSION[loginusername]',
        distributor = '$_POST[nama_distributor]',
        nama_barang = '$_POST[nama_barang]',
        harga_barang = '$_POST[harga_barang]',
        id_barang = '$_POST[id_barang]'";

        $ambildata = "SELECT * FROM pembeli WHERE username = '$_SESSION[loginusername]'";
        $querybeli = mysqli_fetch_array(mysqli_query($connection, $ambildata));

        $jumlahbeli = $querybeli['jumlah_beli'] + 1;

        $beli = "UPDATE pembeli SET jumlah_beli = $jumlahbeli WHERE username = '$_SESSION[loginusername]'";
        mysqli_query($connection, $beli);
        
        $query = mysqli_query($connection, $sql);
        
        $id = $_POST['id_barang'];
        $stokbaru = $_POST['stok_barang'] - 1;
        $decrease = "UPDATE barang SET stok_barang = $stokbaru WHERE id_barang = '$id'";
        $querydecrease = mysqli_query($connection, $decrease);
        
    }
?>
    </body>
</html>