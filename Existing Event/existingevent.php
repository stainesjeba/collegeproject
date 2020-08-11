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
        <script src = "../New Event/navbar.js"></script>
        <link rel="stylesheet" href = "../New Event/navbar.css">

        <style>
            .my-navbar-title{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                font-size: 18px;
                letter-spacing: 1px;
            }
            .my-relative-hor-center{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
            }
            .my-relative-ver-center{
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            .my-border-right{
                border-right: 4px solid rgb(231, 231, 231);
            }
            .my-border-bottom{
                border-bottom: 4px solid rgb(231, 231, 231);
            }
            table{
                opacity: .8;
                width: 90%;
            }
            .my-container{
                width: 95%;
                height: 70%;
                overflow: scroll;
                margin-top: 30px;
                background: rgba(0, 0, 0, 0.301);
                padding-bottom: 20px;
            }
        </style>
        
    </head>

    <body onload="getroot('../Home/');getnavbar('../Home/')">

        <nav class = "navbar align-content-center">
                <div class = "my-navbar-title text-light">Your Active Websites</div>
        </nav>
        <div class = "my-container my-relative-hor-center rounded">
            <?php
            if(isset($_GET['filename'])){
                echo "<div class = 'text-success text-center mt-3'>".$_GET['filename']." is deleted successfully</div>";
            }
            ?>
            <?php
                $dir = "../Users/".$_SESSION['username']."/";

                // Open a directory, and read its contents
                if (is_dir($dir)){
                  if ($dh = opendir($dir)){
                    while (($file = readdir($dh)) !== false){
                        if($file == ".." || $file == "."){

                        }
                        else
                        {
                            echo "<table class = \"bg-light  p-4 rounded text-center  m-3 my-relative-hor-center\">
                                    <tr class = \"p-3\">
                                        <td rowspan = \"2\" class = \"p-4 my-border-right w-25\">".
                                            $file.
                                        "</td>
                                        <td class = \"p-4 my-border-bottom my-border-right w-25\">
                                            Home
                                        </td>
                                        <td class = \"p-4 my-border-bottom w-50  my-border-right\">
                                            <a href = \"../Users/".$_SESSION['username']."/".$file."/home.html \"> User/".$_SESSION['username']."/".$file."/home.html</a>
                                        </td>
                                        <td rowspan = \"2\" class = \"p-5\">
                                           <form action = \"delete.php\" method = \"POST\"><button class = \"btn btn-danger \" name = \"filename\" value = \"".$file."\">Delete</button></form>
                                        </td>
                                    </tr>
                                    <tr class = \"p-4 mt-2\">
                                            <td class = \"p-4 my-border-right w-25\">
                                                   Admin
                                            </td>
                                            <td class = \"p-4 w-50  my-border-right\">
                                            <a href = \"../Users/".$_SESSION['username']."/".$file."/adminlogin.php \"> User/".$_SESSION['username']."/".$file."/adminlogin.php</a>
                                            </td>
                                    </tr>
                                </table>";
                        }
                     
                    }
                    closedir($dh);
                  }
                }
                ?>
                </div>
                
    </body>
</html>