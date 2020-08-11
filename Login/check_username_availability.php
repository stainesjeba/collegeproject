<?php

include 'Db_Connection.php';

$username = $_POST['username'];

$sql = "select `User Name` from `Log In` where `User Name` = '".$username."'";
$result = $conn->query($sql);
if(mysqli_fetch_assoc($result)){
    echo "0";
}
else{
    echo "1";
}

?>