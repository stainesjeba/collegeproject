<?php
session_start();
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src = "../Home/load.js"></script>
        <script src = "navbar.js"></script>
        <link rel="stylesheet" href = "navbar.css">

        <style>
            .my-navbar-title{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                font-size: 18px;
                letter-spacing: 1px;
            }
            .my-navbar-sub-title{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                font-size: 18px;
                letter-spacing: 1px;
                top: 20px;
            }
            .my-pagination{
                position: absolute; 
                bottom: 30px !important;
                left: 50%;
                transform: translateX(-50%);
            }
            .space-pre-nex{
                width: 15vw;
                background: none;
            }
            .my-row{
                height: 10%;
                margin-top: 70px;
                
            }
            .my-relative-ver-center{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
            }
            .my-relative-hor-center{
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            .my-next-button{
                padding: 5px;
                width: 100px;
            }
            .my-col{
                background: white;
                opacity: .6;
                overflow: scroll;
            }
            .my-border-right{
                border-right: 1px solid black;
            }
            .my-success{
                font-size: 18px;
            }
        </style>

    </head>

    <body onload="getroot('../Home/');getnavbar('../Home/')" >

        <nav class = "navbar align-content-center">
            <div class = "my-navbar-sub-title text-light">Page Link</div>
        </nav>
        
        <div class = "text-center mt-5 text-success my-success">Your Website Successfully Created</div>
        <div class = "row my-row">
            <div class = "col-3"></div>
            <div class = "col-2 my-col my-border-right p-5 rounded-left">Home Page</div>
            <div class = "col-4 my-col p-5  rounded-right text-center"><a href = "../Users/<?php echo $_SESSION['username']."/".$_SESSION['eventname']?>/home.html">Users/<?php echo $_SESSION['username']."/".$_SESSION['eventname']?>/home.html</a></div>
            <div class = "col-3"></div>
        </div>

        <div class = "row my-row">
                <div class = "col-3"></div>
                <div class = "col-2 my-col my-border-right p-5 rounded-left">Admin Page</div>
                <div class = "col-4 my-col p-5  rounded-right text-center"><a href = "../Users/<?php echo $_SESSION['username']."/".$_SESSION['eventname']."/"?>adminlogin.php">Users/<?php echo $_SESSION['username']."/".$_SESSION['eventname']."/"?>adminlogin.php</a></div>
                <div class = "col-3"></div>
        </div>

        <ul class="pagination justify-content-center my-pagination disabled">
                <li><button class = "btn btn-primary"  onclick = "window.location.replace('../Home/home.html')">Go back to Home</a></li>
        </ul>
        
        
        

    </body>
</html>

<?php

$username = $_SESSION['username'];
$name = $_SESSION['name'];
$eventname = $_SESSION['eventname'];

session_destroy();

session_start();

$_SESSION['username'] = $username;
$_SESSION['name'] = $name;
$_SESSION['eventname'] = $eventname;

?>