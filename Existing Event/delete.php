<?php

session_start();

$conn = new mysqli("localhost","root","",$_SESSION['username']);

$sql = "drop table `".$_POST['filename']."`";
$conn->query($sql);
$conn->error;

unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/home.html");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/register.html");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/register1.php");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/adminlogin.php");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/admin.php");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/mail.php");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/filter.php");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/delete.php");
unlink("../Users/".$_SESSION['username']."/".$_POST['filename']."/restore.php");

rmdir("../Users/".$_SESSION['username']."/".$_POST['filename']."");


header("Location: existingevent.php?filename=".$_POST['filename']);

?>