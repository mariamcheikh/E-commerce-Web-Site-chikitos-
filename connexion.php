<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		header("location:furniture.php");
		
		}

?> 
</body>
</html>