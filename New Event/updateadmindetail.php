<?php

session_start();

$_SESSION['adminusername'] = $_POST['adminname'];
$_SESSION['adminpassword'] = $_POST['adminpassword'];

echo $_SESSION['adminusername'];
echo $_SESSION['adminpassword'];

header("Location: backgroundselection.php");
 
?>