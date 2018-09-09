<?php
require'Users_Class.php';
require'PDO_DB_Config.php';
$DBase=new DBase_Connection();
$User=new User();
$DB=$DBase->DB_Connection();
$User->set_userID($_GET['id']);
$User->update_accountstate($DB);
header('Location:Dashboard.php');

?>
