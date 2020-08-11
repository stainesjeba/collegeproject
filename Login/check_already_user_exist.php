<?php

include 'Db_Connection.php';

$mail = $_POST['mail'];

$sql = "select `Mail` from `Dim User` where `Mail` = '".$mail."'";
$result = $conn->query($sql);
if(mysqli_fetch_assoc($result)){
    echo 0;
}
else{
    echo 1;
}

?>