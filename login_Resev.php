<?php $auth =0;
  include 'lib/Include.php';
  include 'lib/Auth.php';
  include 'lib/session.php';
  //include 'Partials/header.php';
  if (isset($_POST['User']) && isset($_POST['pass'])) {
    $Connect = new Authentification();
    $us=$Connect->GetConnectUser($_POST['User'],$_POST['pass']);
    if ($us->rowCount() == 1) {
     $_SESSION['Auth'] = $us->fetch();
     if (($_SESSION['Auth']['User_name']) == 'admin') {
     setflash('Vous etes maintenant connecté');

     header('Location:'.WEBROOT.'admin/Index.php');
     die();
    }
    else {
    header('Location:'.WEBROOT.'Index.php');
  //  header('Location:'.WEBROOT.'Index.php');
      die();
    }
  }
  //  if ()
  }
  include 'Partials/header.php';
  ?>
  <form class="form-horizontal" method="post">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" name="User" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" name="pass" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>
<?php
  include 'Partials/Footer.php'; ?>
