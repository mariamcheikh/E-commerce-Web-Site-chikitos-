<?php
session_start();
//var_dump($_SESSION);
if (!isset($auth)) {
    if (!isset($_SESSION['admin_session'])) {
        header('Location:../AdminLogin.php');
        die();
    }
}

if (!isset($_SESSION['csrf'])) {
    $_SESSION['csrf'] = md5(time() + rand());
}
function csrf() {
    return 'csrf=' . $_SESSION['csrf'];
}
function csrfInput() {
    return '<input type="hidden" value="' . $_SESSION['csrf'].'" name="csrf">';
}
function checkCsrf() {
    if (
        (isset($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) ||
        (isset($_GET['csrf']) && $_GET['csrf'] == $_SESSION['csrf'])
    ){
        header('Location:' . WEBROOT . '/csrf.php');
        die();
    }
}

class Authentification {
    private $conn;
    private $user_name;
    private $password;
    function __construct() {
        $conn=0;
        $user_name=0;
        $password=0;
    }
    function get_user_name() {
        return $user_name;
    }
    function get_password() {
        return $password;
    }
    function set_user_name($user_name) {
        $this->user_name=$user_name;
    }
    function set_password($password) {
        $this->password=$password;
    }
    function GetConnectUser($user,$pass) {
        $c = new config();
        $this->conn=$c->getConnexion();
        $req=$this->conn->prepare("SELECT * FROM Admin WHERE User_name=? AND Password=?");
        $req->bindParam(1,$user);
        $req->bindParam(2,$pass);
        $req->execute();
        /*
        if ($req->rowCount() > 0) {
          echo 'exist';
          var_dump($req->fetchAll());
        }
        else {
          echo 'Doesnt exist';
        }
        */
        return $req;
    }

}
?>