<?php
class Emailvalidation 
{
	private $firstname;
	private $lastname;
	private $email;
	private $key;
	private $accountstate;
	private $id;

	function __construct()
	{
	 $firstname="";
	 $lastname="";
	 $email="";
	 $key="";
	 $accountstate=false;
	}

	/****GET/SET Function****/
		function set_firstname($firstname)
	{
		$this->firstname=$firstname;
	}


		function set_lastname($lastname)
	{
		$this->lastname=$lastname;
	}

		function set_email($email)
	{
		$this->email=$email;
	}


		function set_key($key)
	{
		$this->key=$key;
	}

		function set_accountstate($accountstate)
	{
		$this->accountstate=$accountstate;
	}
			function set_id($id)
	{
		$this->id=$id;
	}

	/******Functions******/

	function send_emailvalidation($DB)
	{
		$this->key=md5(microtime(TRUE)*100000);
	   $req=$DB->prepare("UPDATE `users` SET `keys`=? where `email`=? ");
	   $req->bindParam(1,$this->key);
	   $req->bindParam(2,$this->email);
	   $req->execute();
	   
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "chikitos.tunisie@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "azerty@my.com";

//Set who the message is to be sent from
$mail->setFrom('chikitos.tunisie@gmail.com', 'chikitos tunisie');

//Set an alternative reply-to address
$mail->addReplyTo('chikitos.tunisie@gmail.com', 'chikitos tunisie');

//Set who the message is to be sent to
$mail->addAddress($this->email,$this->firstname.' '.$this->lastname);

//Set the subject line
$mail->Subject = 'Activation de votre compte';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->Body = 'Bonjour '.$this->firstname.' '.$this->lastname.' ,<br>

Nous vous remercions davoir rejoint chikitos-tunisie.<br>

Veuillez cliquer sur le lien ci-dessous pour confirmer votre inscription et activer votre compte sur chikitos-tunisie.com.<br>

http://localhost/AtelierPHP/projetweb/Activation.php?email='.urlencode($this->email).'&keys='.urlencode($this->key).'<br>

Vous trouverez sous la rubrique « Mon compte » les informations enregistrées vous concernant. Merci de prendre le temps de vérifier que ces informations sont correctes.

Si vous n’avez pas ouvert un nouveau compte sobflous, vous pouvez ignorer cet email sans cliquer sur le lien ci-dessus.

Veuillez ne pas répondre à cet email, car toute réponse envoyée à cette adresse ne sera pas traitée. Pour nous contacter, connectez-vous à votre compte et cliquez sur Contactez-nous en bas de nimporte quelle page.<br>

Bien à vous,<br>

www.chikitos-tunisie.com';

//Replace the plain text body with one created manually
$mail->AltBody = 'Activation de votre compte';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
	return false;
   // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	return true;
   //echo "Message sent!";
}
	}

	//End Function

	public function account_activation($DB)
	{
	   $req=$DB->prepare("SELECT `keys`, `accountstate` FROM `users` WHERE `email`=? ");
	   $req->bindParam(1,$this->email);
	   $req->execute();
	   	   while ($Row = $req->fetch())
    {
    	$this->accountstate=$Row['accountstate'];
    	$KeysDB=$Row['keys'];
	}
	if ($this->accountstate==true) {
		/*$exist="exist";
		return ($exist);*/
		return true;
    }else{
		if ($this->key==$KeysDB) {
	   $val=true;
	   $req=$DB->prepare("UPDATE users SET accountstate=? where `email`=? ");
	   $req->bindParam(1,$val);
	   $req->bindParam(2,$this->email);
	   $req->execute();
	   return true;
		}else{
			return false;
		}
	}

	

	}
	//End Function

		function send_emailpassword($DB)
			{
				
			   $req=$DB->prepare("SELECT * FROM `users` WHERE `email`=?");
			   $req->bindParam(1,$this->email);
			   $req->execute();
			   $Row = $req->fetch();
			   
		date_default_timezone_set('Etc/UTC');

		require 'PHPMailerAutoload.php';

		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 2;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "chikitos.tunisie@gmail.com";

		//Password to use for SMTP authentication
		$mail->Password = "azerty@my.com";

		//Set who the message is to be sent from
		$mail->setFrom('chikitos.tunisie@gmail.com', 'chikitos tunisie');

		//Set an alternative reply-to address
		$mail->addReplyTo('chikitos.tunisie@gmail.com', 'chikitos tunisie');

		//Set who the message is to be sent to
		$mail->addAddress($this->email,$this->firstname.' '.$this->lastname);

		//Set the subject line
		$mail->Subject = 'Réinitialiser Mot de Passe';

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
		$mail->Body = 'Bonjour '.$Row['firstname'].' '.$Row['lastname'].' ,<br>

		Nous vous remercions davoir rejoint chikitos-tunisie.<br>

		Veuillez cliquer sur le lien ci-dessous pour Réinitialiser votre Mot de Passe .<br>

		http://localhost/AtelierPHP/projetweb/Reset_password.php?id='.urlencode($Row['user_id']).'&keys='.urlencode($Row['keys']).'<br>

		www.chikitos-tunisie.com';

		//Replace the plain text body with one created manually
		$mail->AltBody = 'Réinitialiser Mot de Passe';

		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');

		//send the message, check for errors
		if (!$mail->send()) {
			return false;
		   // echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			return true;
		   //echo "Message sent!";
		}
			}

	//End Function
				public function verif_keys($DB)
	{
	   $req=$DB->prepare("SELECT `keys`, `accountstate` FROM `users` WHERE `user_id`=? ");
	   $req->bindParam(1,$this->id);
	   $req->execute();
	   	   while ($Row = $req->fetch())
    {
    	$this->accountstate=$Row['accountstate'];
    	$KeysDB=$Row['keys'];
	}
	if ($this->accountstate==true && $this->key==$KeysDB) {
		return true;
    }else{

		return false;

	}

	

	}
	//End Function
}
?>