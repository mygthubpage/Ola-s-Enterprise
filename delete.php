<?php 
require_once'connect.php';
session_start();
if (! isset($_SESSION['account'])) {
	header("Location:home.php");
}
if (isset($_POST['delete']) && isset($_POST['id'])) {
	$sql='DELETE FROM tutorial WHERE id = :zip';
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':zip' => $_POST['id']));
	$_SESSION['success']='account deleted';
	header('Location:home.php');
	return;

}


$sql="SELECT * FROM tutorial WHERE email=:account";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':account'=>$_SESSION['account']));

$row=$stmt->fetch(PDO::FETCH_ASSOC);
  echo "delete " .$row['name'] .'?';
  
 ?>
<h2>Deleting from database tables</h2>
<html><head></head><body>
	<table border="1">

<p>Confirm deleting <?= htmlentities($row['name']); ?></p>
<form method="POST">
	<input type="hidden" name="id" value="<?= $row['id'] ?>" >
	<input type="submit" name="delete" value="delete">
</form>
</table></body></html>
