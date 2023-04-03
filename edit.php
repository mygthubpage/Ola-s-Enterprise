
<?php
require_once'connect.php';
session_start();
if (! isset($_SESSION['account'])) {
	header("Location:home.php");
}
// I added the above conditional statement to ensure the user logged in before he or she can access the edit page
if (isset($_POST['name1']) && isset($_POST['email1']) && isset($_POST['password1']) ) {
     
	$sql='UPDATE tutorial SET name=:name1,  email=:email1, password=:password1 WHERE email=:email1';
	echo "<pre>\n$sql</pre>\n";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':name1' => $_POST['name1'], ':email1' => $_POST['email1'], ':password1' => $_POST['password1']));
	$_SESSION['success']='updated successfully';
	header('Location:home.php');


}

//In case you want to use id to update form
// if (isset($_POST['name1']) && isset($_POST['email1']) && isset($_POST['password1']) && isset($_POST['uid'])) {
     
// 	$sql='UPDATE tutorial SET name=:name1,  email=:email1, password=:password1 WHERE id=:zip';
// 	echo "<pre>\n$sql</pre>\n";
// 	$stmt=$pdo->prepare($sql);
// 	$stmt->execute(array(':name1' => $_POST['name1'], ':email1' => $_POST['email1'], ':password1' => $_POST['password1'], ':zip' => $_POST['uid']));

// }


?>

</table></body></html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> EDIT PROFILE</title>
</head>
<body>
<p>Edit profile</p>
<form method="POST" title="update user">
	
<?php 
include('connect.php');
$sql="SELECT * FROM tutorial WHERE email=:account";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':account'=>$_SESSION['account']));

$row=$stmt->fetch(PDO::FETCH_ASSOC);
  echo "Welcome " .$row['name'];
  
 ?>
    <p >Name:
    <input type="text" name="name1" size="40" value="<?= $row['name'];?>" required>
    </p>
    <pl>Email:
    <input type="email" name="email1" size="40" value="<?= $row['email']; ?>" randomly></p>
    <p>Password:
    <input type="password" name="password1" size="40" required></p>
    <!-- <p>od:
    <input type="password" name="uid" size="40"></p> -->
    <input type="submit" name="update" value="UPDATE" size="40">
   
</foem>
<br><br>


</body>
</html>
