<?php
  session_start();
  include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>GG Gaming's Login Page</title>
    <link rel="stylesheet" href="Assets_UAS/css/style.css">
  </head>

  <body>
    <div id="box">
      
      <form class="login" method="POST">

        <p class="judul-login">LOGIN</p>
        <img class="logo-login" src="Assets_UAS/img/logo.png" alt="Gambar Logo"><br /><br />

        <p class="label-login-username">Username :</p>
        <input class="input-login-username" type="text" id="username" name="loginusername" placeholder="Insert Username here..." required><br /><br /><br />

        <p class="label-login-pw">Password :</p>
        <input class="input-login-pw" type="password" id="pw" name="loginpw" minlength="8" maxlength="15" placeholder="Insert Password here..." required><br /><br />

        <input class="submit-login" type="submit" id="submit-button" name="submitlogin">
        
        <p class="dont-have-account">Don't have an account? 
          <span><a style="color:#5695DE" href="register.php">Sign Up</a></span></p>
          
      </form>

    </div>
  </body>
</html>

<?php
if(isset($_POST['submitlogin'])) {
  $sql = mysqli_query($connection, "select * from login where username ='$_POST[loginusername]' and password = '$_POST[loginpw]'");

  $check = mysqli_num_rows($sql);
  if($check > 0){
    $_SESSION['loginusername'] = $_POST['loginusername'];

    echo "<meta http-equiv=refresh content=0;URL='home.php'>";
  }
  else {
    echo "<p style='margin-top: 40px;color:#E5E5E5;font-family: Poppins-light;font-size: 24px;' align=center><b> Wrong Username/Password! </b></p>";
    echo "<meta http-equiv=refresh content=1;URL='login.php'>";
  }
}

?>

