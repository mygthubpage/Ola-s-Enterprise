<?php 

$pdo= new PDO('mysql:host=localhost;port=3306;dbname=ola', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($pdo) {
    echo "";
}
else {
echo "not connected";
exit();
}
 ?>
