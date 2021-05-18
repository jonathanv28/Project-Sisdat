<?php
include "sessionadmin.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GG Gaming's Admin Page</title>
        <link rel="stylesheet" href="Assets_UAS/css/style.css">
    </head> 

    <body>
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
        <td><form method='POST'>
        <input type='hidden' name='id_barang' value='$show[id_barang]'/>
        <button type='submit' name='submit' class='add-button'> ADD </button>
        </form></td>
        <td><form method='POST'>
        <input type='hidden' name='id_barang' value='$show[id_barang]'/>
        <button type='submit' name='submit-delete' class='add-button'> DEL </button>
        </form></td>
    </tr>

    ";
}

?>
        </table>
    </div>
<?php
    if(isset($_POST['submit'])) {
        $id = $_POST['id_barang'];
        $query = mysqli_query($connection, "SELECT stok_barang FROM barang WHERE id_barang = '$id'");
        $ambildata = mysqli_fetch_array($query);
        
        $stokbaru = $ambildata['stok_barang'] + 1;
        $sql = "UPDATE barang SET stok_barang = '$stokbaru' WHERE id_barang = '$id'";

        $update = mysqli_query($connection, $sql);
        echo "<meta http-equiv=refresh content=0;URL='admin.php'>";
    }

    if(isset($_POST['submit-delete'])) {
        $id = $_POST['id_barang'];
        $querydelete = "DELETE FROM barang WHERE id_barang = '$id'";
        $querydeletedistributor = "DELETE FROM distributor WHERE id_barang = '$id'";
        mysqli_query($connection, $querydeletedistributor);
        mysqli_query($connection, $querydelete);

        echo "<meta http-equiv=refresh content=0;URL='admin.php'>";
    }

?>
    <a href="logout.php" class="back-admin">BACK</a>
    </body>
</html>