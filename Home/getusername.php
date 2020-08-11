<?php

session_start();

//$_SESSION['username'] = "Staines";


if(!isset($_SESSION['name']))
{
    echo 0;
}
else{
    echo $_SESSION['name'];
}

?>