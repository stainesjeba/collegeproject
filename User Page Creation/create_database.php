<?php

session_start();

$defaultfieldname1 = "Name";
$defaultfieldname2 = "Mobile Number";
$defaultfieldname3 = "Mail Id";




$conn = new mysqli("localhost","root","",$_SESSION['username']);
$sql = "create table `".$_SESSION['eventname']."` (
    Pid int";
    $count = $_SESSION['selectedfieldcount'];
    $selectedfield = $_SESSION['selectedfield'];
    $fields = explode(",",$selectedfield);
    for ($i = 0; $i<$count;$i++){
        if(strpos($fields[$i],"d") !== false)
        {
            $number = substr($fields[$i],-1);
            $sql .= ",`".${"defaultfieldname".$number}."` varchar(100)";
        }
        else
        {
            $number = substr($fields[$i],-1);
            $sql .= ",`".$_SESSION["addedfieldname".$number]."` varchar(100)";
        }
    }
    $sql .= ",`Mail Status` int,`Delete Status` int)";
    if($conn->query($sql)){
        
        header("Location: createregistrationpage.php");
    }
    else{
        echo $conn->error;
    }
?>