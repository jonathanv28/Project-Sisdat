<?php
session_start();
if(!isset($_SESSION['loginusername'])) {
    header("location:login.php");
}

?>
