<?php
session_start();
$_SESSION['selectedfield'] = $_POST['selectedfield'];
$_SESSION['selectedfieldcount'] = $_POST['selectedfieldcount'];
echo $_SESSION['addedfielddropdownlist7'];
header("Location: Third Page.html")
?>