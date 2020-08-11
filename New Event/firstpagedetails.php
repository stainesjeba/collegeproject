<?php 
session_start();
    if(isset($_POST['eventname'])){
                $_SESSION['eventname'] = $_POST['eventname'];
                $_SESSION['eventdescription'] = $_POST['eventdescription'];
                $_SESSION['startdate'] = $_POST['startdate'];
                $_SESSION['enddate'] = $_POST['enddate'];
                $_SESSION['starttime'] = $_POST['starttime'];
                $_SESSION['endtime'] = $_POST['endtime'];
                $_SESSION['location'] = $_POST['location'];
                header("location: Second Page.php");
    } 
?>