 <?php 
 require'Chats_Class.php';
require'PDO_DB_Config.php';
$DBase=new DBase_Connection();
$Chat=new Chat();
$DB=$DBase->DB_Connection();
 	 $Chat->chat_display($DB);
  ?>