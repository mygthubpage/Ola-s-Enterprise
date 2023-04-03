<?php
require_once'connect.php'[]
session_start();
function sendMail($email):{
	$to=$row['email'];
	$subject='reset link';
	$message='reset password message';
	$header='From:olaenterprise@yahoo.com';
	$header='Cc.me@yahoo.com';
	$retval=mail($to, $subject, $message, $header);
	if ($retval) {
		echo("message sent successfully");
	}
	else{
		echo('unable to send message')
	}
}
if (isset($_POST['email'])){
			$sql='SELECT * FROM tutorial WHERE email=:account';
			$stmt=$pdo->prepare($sql);
			$stmt->execute(array(':account'=>$_POST['email']));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
   		echo "hi, ".$row['name'].' send mail'; 
}
 ?>
 <form method="post">
 	<fieldset>
 		<legend>comfirm mail</legend>
 		<p><input type='email' name="email" placeholder="email address" required></p>
 		<input type="submit" name="" value="send mail" onclick="email()" required>
 	</fieldset>
 </form>
 <script type="text/javascript">
 	function sendmail()
 </script>