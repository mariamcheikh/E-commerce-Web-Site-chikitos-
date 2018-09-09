<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body>
 <?php
require'Admin_Class.php';
require'PDO_DB_Config.php';
$DBase=new DBase_Connection();
$Admin=new Admin();
$DB=$DBase->DB_Connection();
if (!empty($_POST)) {
$Admin->set_email($_POST['email']);
$Admin->set_pwd($_POST['password']);

if ($Admin->admin_login($DB)==false) { 
  ?>
<script type="text/javascript">
alert('Sil vous plaît verifier vos Données');
</script>
  
  <?php 
  }else{ ?>

<SCRIPT LANGUAGE="JavaScript">
document.location.href="Dashboard.php"
</SCRIPT>
  <?php }
}
?>
    <div class="container">

      <form class="form-signin" method="POST" action="AdminLogin.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
