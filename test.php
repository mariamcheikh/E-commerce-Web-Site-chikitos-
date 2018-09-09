<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form method="post" action="test.php">
	<div class="g-recaptcha" data-sitekey="6LftlRkTAAAAAER00Yz02KvR9mbRQHpWpi2VriSs"></div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>
<?php 

require'Recaptcha_Validation.php';
if (!empty($_POST)) {
	$captcha=new Recaptcha();
	$captcha->set_code($_POST['g-recaptcha-response']);
	if ($captcha->checkcaptcha()===false) {
		?>
		<div class="alert alert-danger">Verifier Recaptcha</div>


		<?php
	}else{
		?><div class="alert alert-success">goood</div>
<?php
		}

}

require'Email_Validation.php';
require'PDO_DB_Config.php';
$DBase=new DBase_Connection();
$DB=$DBase->DB_Connection();
$EmailVal=new Emailvalidation();
$EmailVal->set_firstname("ghassen");
$EmailVal->set_lastname("hannachi");
$EmailVal->set_email("keys.iheb@gmail.com");

$EmailVal->send_emailvalidation($DB);

?>
	
</body>
</html>