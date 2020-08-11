<?php
session_start();
$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/adminlogin.php", "w") or die("Unable to open file!");
include 'choice.php';
$a = "
    <?php
    session_start();
    ?>
    <html>
    <head>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"../../../bootstrap/css/bootstrap.min.css\">
    <script src=\"../../../bootstrap/jquery-3.4.1.min.js\"></script>
    <script src=\"../../../bootstrap/js/bootstrap.min.js\"></script>

        

        <style>

            body{
                background-image: url('".${background.$_SESSION['background']}."');
                background-size: cover;
            }
            .my-navbar{
               padding-top: 20px;
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
            .my-row{
                height: 40%;
                margin: 20px;
                margin-top: 80px;
                overflow: scroll;
            }

            </style>
            </head>

            <body>
            <div class = \"my-black-box\"></div>

            <nav class = \"navbar my-navbar\">
                <div class = \"my-navbar-title my-relative-ver-center navbar-brand\">".
                strtoupper($_SESSION['eventname']).
                    
                "</div>
            </nav>
            <nav class = \"navbar my-navbar m-0 pt-0\">
                <div class = \"my-navbar-sub-title my-relative-ver-center\">
                    Admin
                </div>
            </nav>

                <div class = \"row my-row\">
                    <div class = \"col-md-3\"></div>
                    <div class = \"col-md-6 bg-light p-5 rounded\">
                    
                        <form action = \"\" method=\"POST\">

                        <?php
                                if(isset($"."_POST['username'])){
                                    if($"."_POST['username'] == \"".$_SESSION['adminusername']."\" && $"."_POST['password'] == \"".$_SESSION['adminpassword']."\"){
                                        $"."_SESSION['adminlogin'] = 1;
                                       header(\"Location: admin.php\");
                                    }
                                    else{
                                        echo \"<div class = 'text-danger text-center'>Username or password is incorrect</div>\";
                                    }
                                }
                            ?>
                            
                            <div class = \"form-group\">
                                <input class = \"form-control\" placeholder=\"Admin Username\" name = \"username\">
                            </div>
                            <div class = \"form-group\">
                                    <input type = \"password\" class = \"form-control\" placeholder=\"Admin Password\" name = \"password\">
                            </div>
                            <div class = \"form-group\">
                                <button class = \"btn btn-primary my-relative-ver-center\">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class = \"col-md-3\">

                    </div>
                </div>
            </body>

            </html>";
            fwrite($myfile, $a);
            fclose($myfile);
            header("Location: createadmin.php");
            ?>
            