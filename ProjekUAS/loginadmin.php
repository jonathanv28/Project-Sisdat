<?php
  session_start();
  include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>GG Gaming's Login Admin Page</title>
    <link rel="stylesheet" href="Assets_UAS/css/style.css">
  </head>

  <body>
    <div id="box">
      
      <form class="login" method="POST">

        <p class="judul-login">LOGIN</p>
        <img class="logo-login" src="Assets_UAS/img/logo.png" alt="Gambar Logo"><br /><br />

        <p class="label-login-username">Username (Admin):</p>
        <input class="input-login-username" type="text" id="username" name="loginusernamea" placeholder="Insert Username here..." required><br /><br /><br />

        <p class="label-login-pw">Password (Admin):</p>
        <input class="input-login-pw" type="password" id="pw" name="loginpwa" placeholder="Insert Password here..." required><br /><br />

        <input class="submit-login" type="submit" id="submit-button" name="submitlogina">
        
      </form>

    </div>
  </body>
</html>

<?php
if(isset($_POST['submitlogina'])) {
  $sql = mysqli_query($connection, "SELECT * FROM login WHERE username ='$_POST[loginusernamea]' and password = '$_POST[loginpwa]'");

  $check = mysqli_num_rows($sql);
  if($check > 0){
    $_SESSION['loginusernamea'] = $_POST['loginusernamea'];

    echo "<meta http-equiv=refresh content=0;URL='admin.php'>";
  }
  else {
    echo "<p style='margin-top: 40px;color:#E5E5E5;font-family: Poppins-light;font-size: 24px;' align=center><b> Wrong Username/Password! </b></p>";
    echo "<meta http-equiv=refresh content=2;URL='loginadmin.php'>";
  }
}

?>