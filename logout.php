
<p style="font-style: italic; color: orange;">Logged out:<a href="login.php">login</a></p>
<?php 
session_start();
session_destroy();
header("Location:home.php");
?>


