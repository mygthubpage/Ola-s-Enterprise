<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
	<title>Sign up page</title>
</head>
<body style="font-family: sans-serif; color: black; text-align: center; background-color: gray;">
<h1>Sign up</h1>
<?php
require_once'connect.php';
session_start();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
    	echo('enter all fields');
    }else{
	   $sql="INSERT INTO tutorial (name, email, password) VALUES (:name, :email , :password)";
	  // echo ("<pre>\n".$sql."\n</pre>\n");
	   $stmt=$pdo->prepare($sql);
	   $stmt-> execute(array(':name' => $_POST['name'] , ':email' => $_POST['email'] , ':password' => $_POST['password'] ));
       $_SESSION['success']='<p style="color:blue;">registration successful</p>';
       header("Location:home.php");
       return;
    }
}
?>
<form method="POST" title="insert user" class="form-group">
	

    <p class="text-dark" >Name:
    <input type="text" name="name" size="40"  class="form-group bg-transparent ">
    </p>
    <p class="text-dark">Email:
    <input type="email" name="email" size="40" class="form-group bg-transparent " ></p>
    <p class="text-dark">Password:
    <input type="password" name="password" size="40" class="form-group bg-transparent "></p>

    <input type="submit" name="" value="sign-up" size="40">
   
</foem>
</body>
</html>