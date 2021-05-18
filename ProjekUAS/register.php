<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>GG Gaming's Register Page</title>
  <link rel="stylesheet" href="Assets_UAS/css/style.css">
</head>

<body>
  <div id="box">

    <form class="register" method="POST">

      <p class="judul-signup">REGISTER</p>

      <p class="label-signup-name">Name :</p>
      <input class="input-signup-name" type="text" id="name" name="signupname" placeholder="Insert Name here..." required><br /><br />

      <p class="label-signup-username">Username :</p>
      <input class="input-signup-username" type="text" id="username" name="signupusername" placeholder="Insert Username here..." required><br /><br />

      <p class="label-signup-email">Email :</p>
      <input class="input-signup-email" type="text" id="email" name="signupemail" placeholder="Insert Email here..." required><br /><br />

      <p class="label-signup-pw">Password :</p>
      <input class="input-signup-pw" type="password" id="pw" name="signuppw" minlength="8" maxlength="15" placeholder="Insert Password here..." required><br /><br />

      <p class="label-signup-address">Address :</p>
      <input class="input-signup-address" type="text" id="address" name="signupaddress" placeholder="Insert Address here..." required><br /><br />

      <img class="logo-signup" src="Assets_UAS/img/logo.png" alt="Gambar Logo"><br /><br />

      <input style="color:#E5E5E5" class="submit-signup" type="submit" id="submit-button" name="submitsignup" value="SIGN UP">


    </form>

  </div>
</body>

</html>

<?php
include "connection.php";
if (isset($_POST['submitsignup'])) {
  mysqli_query($connection, "INSERT INTO login SET
      username = '$_POST[signupusername]',
      password = '$_POST[signuppw]'
      ");

  $querypembeli = "INSERT INTO pembeli SET
      id_pembeli = '0',
      nama_pembeli = '$_POST[signupname]',
      email_pembeli = '$_POST[signupemail]',
      alamat = '$_POST[signupaddress]',
      username = '$_POST[signupusername]'
      ";

  mysqli_query($connection, $querypembeli);

  echo "<p style='margin-top: 10px;color:#E5E5E5;font-family: Poppins-light;font-size: 24px;' align=center><b> You are Registered! </b></p>";
  echo "<figure class='remah-signup'></figure>";
  echo "<center><a href='logout.php' class='back-button'>BACK</a>";
}
?>