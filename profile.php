<?php 
require_once'connect.php';
session_start();
if (! isset($_SESSION['account'])) {
	header("Location:home.php");
}
$sql='SELECT * FROM tutorial WHERE email=:email';
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':email'=>$_SESSION['account']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
echo('Name: '.$row['name'] .'<br><br>');
echo('Username: '.$row['email'].'<br><br>');
echo('<a href="reset.php">reset password</a>');

?>