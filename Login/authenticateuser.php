<?php
session_start();
include 'Db_Connection.php';

$username = $_POST['username'];
$userpassword = $_POST['password'];


$sql = "select Password ('".$userpassword."') as pass";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$userpassword = $row['pass'];

$sql = "select `User Id`,`User Name`,Password from `Log In` where `User Name` = '".$username."'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
 
if($userpassword == $row['Password']){
    $_SESSION['username']=$row['User Name'];
    $sql = "select Name from `Dim User` where `User Id` = ".$row['User Id'];
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $row['Name'];
    header('Location: ../Home/home.html');
}
else{  
    header('Location: index.html?0');
}
?>