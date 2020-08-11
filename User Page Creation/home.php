
<?php
session_start();

echo "../Users/".$_SESSION['username']."/".$_SESSION['eventname'];
mkdir("../Users/".$_SESSION['username']."/".$_SESSION['eventname'])or die("Unable to open file!");
$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/home.html", "w") or die("Unable to open file!");
include 'choice.php';
$a = "<html>
    <head>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"../../../bootstrap/css/bootstrap.min.css\">
        <script src=\"../../../bootstrap/jquery-3.4.1.min.js\"></script>
        <script src=\"../../../bootstrap/js/bootstrap.min.js\"></script>

        <style>
            @media only screen and (max-width: 720px) {
                .my-row{
                    height: 20%;
                    position: absolute;
                    bottom: 100px;
                    opacity: .8;
                    margin: 0px!important;
                    width: 90%!important;
                    left: 50%;
                    transform: translateX(-50%);
                    border-radius: 10px;
                }
            }
            @media only screen and (min-width: 720px) {
                .my-row{
                    height: 18%;
                    position: absolute;
                    bottom: 60px;
                    margin-left: 0px!important;
                    opacity: .9;
                }
            }
            body{
                background-image: url('".${background.$_SESSION['background']}."');
                //background-image: linear-gradient(to right, rgb(0, 69, 71), rgba(0, 87, 90, 0.5));
                background-size: cover;
                
            }
            .my-navbar{
               padding-top: 30px;
            }
            .my-black-box{
                position: absolute;
                width: 100%;
                height: 100%;
                background: black;
                opacity: .8;
            }
            .my-navbar-title{
                font-size: 35px;
                letter-spacing: 3px;
                font-family: cursive;
                font-weight: bold;
                color: white;
            }
            .my-navbar-sub-title{
                font-size: 18px;
                color: white;
                letter-spacing: 1px;
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
            .my-register-button{
                position: absolute;
                left: 50%;
                top:40%;
                transform: translate(-50%,-40%);
            }
            
            .my-col-image{
                float: left;
                margin-left: 10px;
                width: 50px;
                height: 50px;
            }
            .my-border-right{
                border-right: 1px solid rgba(0, 0, 0, 0.37);
            }
            .my-button{
                height: 50px;
                width: 150px;
            }
        </style>
    </head>

    <body>

        <div class = \"my-black-box\"></div>

        <nav class = \"navbar my-navbar\">
            <div class = \"my-navbar-title my-relative-ver-center navbar-brand\">";?> 
            <?php 
                $a .=  strtoupper($_SESSION['eventname']);
            ?>
            <?php $a .= "</div>
        </nav>
        <nav class = \"navbar my-navbar m-0 pt-0\">
        <div class = \"my-navbar-sub-title my-relative-ver-center\">"?>
            <?php $a .= strtoupper($_SESSION['eventdescription']); ?>
       <?php 
       $a .= "</div>
        </nav>

        <div class = \"my-register-button\">
            <button class = \"btn btn-light p-2 my-button\" onclick = \"window.location.href = 'register.html';\">REGISTER</button>
        </div>
        
        <div class = \"row my-row w-100\">
            <div class = \"col-md-2\"></div>
            <div class = \"col-md-2 bg-light my-border-right rounded-left p-1\">
                <div class = \"my-col-image  my-relative-hor-center\"><img src = \"../../../User Page Creation/calender.png\" class = \"w-100 h-100\"></div>
                <div class = \"my-col-text text-center my-relative-hor-center\">
                    <strong>Date</strong><br>";?>
                    <?php 
                        $a .=  $_SESSION['startdate'];
                    ?>
                    <?php
                $a .= "</div>
            </div>
            <div class = \"col-md-4 bg-light p-3 my-border-right p-1\">
                <div class = \"my-col-image  my-relative-hor-center\"><img src = \"../../../User Page Creation/location.png\" class = \"w-100 h-100\"></div>
                <div class = \"my-col-text text-center my-relative-hor-center\">
                    <strong>Location</strong><br>";?>
                    <?php 
                        $a .=  $_SESSION['location'];
                    ?>
                <?php 
                $a .= "</div>
            </div>
            <div class = \"col-md-2 bg-light rounded-right\">
                <div class = \"my-col-image  my-relative-hor-center\"><img src = \"../../../User Page Creation/clock.png\" class = \"w-100 h-100\"></div>
                <div class = \"my-col-text text-center my-relative-hor-center\">
                    <strong>Time</strong><br>"?>

                    <?php 
                        $a .=  $_SESSION['starttime']
                    ?>
                <?php
                $a .= "</div>
            </div>
            <div class = \"col-md-2\"></div>
        </div>
       
    </body>
</html>";
fwrite($myfile, $a);
fclose($myfile);
header("Location: create_database.php");
?>