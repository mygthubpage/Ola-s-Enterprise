<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/counto/animate.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="plugins/animated-text/animated-text.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
	<title>login page</title>
</head>
<body style="font-family: sans-serif; color: black; text-align: center; background-color: gray;">
<p class="text-dark md-4">New user?<a href="signUp.php">Sign up</a></p>
<?php
session_start();
require_once'connect.php';
if (isset($_POST['account']) && isset($_POST['pw'])) {
	unset($_SESSION['account']); 
	//logout current user
    if (empty($_POST['account']) && empty($_POST['pw'])) {
    	$_SESSION['error']="enter all fields!";
    }else{
     $sql="SELECT * FROM tutorial WHERE email=:account && password=:pw ";
     $stmt=$pdo->prepare($sql);
     $stmt->execute(array(':account'=>$_POST['account'], ':pw'=>$_POST['pw']));
     $row=$stmt->fetch(PDO::FETCH_ASSOC);
     if ($row===false) {
        echo('<p style="color:red;">incorrect username or password!</P>');
        
     }else{
     
       if ($row['email']==$_POST['account']) {
    	$_SESSION['account']=$_POST['account'];
    	$_SESSION['success']='Logged in';
    	header('Location: home.php');
    	return;
       }else{
    	$_SESSION['error']='incorrect password.';
    	header('Location:login.php');
    	return;
    }
     }
}
}
?>

	<h3>Kindly login</h3>
<?php

if (isset($_SESSION['error'])) {
	echo('<p style="color:red">' .$_SESSION['error'] ."</p>\n");
	unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
	echo("<p style='color:green'>" .$_SESSION['success'] ."</p>\n");
	unset($_SESSION['success']);
}
?>
<form method="POST">
	<p class=" text-dark md-4">|Username: <input type="text" class=" bg-transparent  text-dark md-4" name="account" value="" placeholder="example@olaenterprise.com"></p>
	<p class="text-dark md-4">Password: <input type="password"  class="bg-transparent text-dark md-4" name="pw" value="" placeholder="password"></p>
	
	<!-- password is unsi -->
    <p><input type="submit" value="login"><a href="home.php">Cancel</p>

</form>
 
</body>


</html>




</body>
</html>