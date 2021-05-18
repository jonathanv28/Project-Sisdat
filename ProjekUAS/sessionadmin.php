<?php
session_start();
if(!isset($_SESSION['loginusernamea'])) {
    header("location:loginadmin.php");
}
?>

