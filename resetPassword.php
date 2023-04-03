<?php
session_start();
require_once'connect.php';
if (isset($_SESSION['error'])) {
   echo("<p style='color:red;'>".$_SESSION['error']. "</p>\n");
   unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
	echo("<p style='color:green'>". $_SESSION['success']. "</p>\n");
  
  unset($_SESSION['success']);
}

if (! isset($_SESSION['account'])) {
 	header('Location: home.php');
 } else{
	if (isset($_POST['new_password']) && isset($_POST['confirm_password'])){
		if ($_POST['confirm_password'] !== $_POST['new_password']) {
			$_SESSION['error']='passwords don\'t match';
			header('Location:resetPassword.php');
		}else{
		$sql='UPDATE tutorial SET password=:new_password where email=:account';
		$stmt=$pdo->prepare($sql);
	    $stmt->execute(array(':new_password'=>$_POST['new_password'], ':account'=>$_SESSION['account']));
	    $_SESSION['success']='password reset successful, login with your new password';
	    header("Location:login.php");
	    }
	}    
}
$sql='SELECT * FROM tutorial WHERE email=:account';
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':account'=>$_SESSION['account']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
echo "hi, ".$row['name'].' you can now change your password';
 ?>
 <form method="post">
 	<fieldset>
 		<legend>CHANGE PASSWORD</legend>
 		
 		<p><input type='password' name="new_password" placeholder="new password" required></p>
 		<p><input type="password" name="confirm_password" placeholder="confirm password"></p>
 		<input type="submit" name="" value="reset password" required>
 	</fieldset>
 </form>