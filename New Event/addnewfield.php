<?php

session_start();
if($_SESSION['addedfieldcount'] == ""){
    $_SESSION['addedfieldcount'] =0;
}

$_SESSION['addedfieldcount'] = $_SESSION['addedfieldcount']+1;

$count = $_SESSION['addedfieldcount'];
echo $count;

$_SESSION['addedfieldname'.$count] = $_POST['fieldname'];
$_SESSION['addedfieldtype'.$count] = $_POST['fieldtype'];
$_SESSION['addedfielddropdownlist'.$count] = $_POST['dropdownfields'];

echo $_SESSION['addedfieldname'.$count].$_SESSION['addedfieldtype'.$count].$_SESSION['addedfielddropdownlist'.$count];
?>