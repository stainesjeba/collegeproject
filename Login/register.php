<?php

include 'Db_Connection.php';

$name = $_POST['name'];
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$mail = $_POST['mail'];
$password = $_POST['password'];

//Get the greatest user id
$sql = "select max(`User Id`) as id from `Dim User`";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$id = $id+1;

//insert into Dim User table
$sql = "insert into `Dim User` values (".$id.",'".$name."','".$mobile."','".$mail."')";
if($conn->query($sql)){

    //insert into login table
    $sql = "insert into `Log In` values (".$id.",'".$username."',Password('".$password."'),'".$name."')";
    if($conn->query($sql)){
        mkdir("../Users/".$username,0755);
        $sql = "create database ".$username;
        $conn->query($sql);
        header('Location: index.html');
    }
    else{
        header('Location: register.html');
    }

}

else{
    header('Location: register.html');
}

?>