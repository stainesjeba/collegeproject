
<?php
session_start();
$defaultfieldname1 = "Name";
$defaultfieldtype1 = "text";
$defaultfieldname2 = "Mobile Number";
$defaultfieldtype2 = "number";
$defaultfieldname3 = "Mail Id";
$defaultfieldtype3 = "email";
?>
<?php
$boolean = is_dir('../Users/'.$_SESSION['username']."/".$_SESSION['eventname']);
echo $boolean;
while(!$boolean){
    $boolean = is_dir('../Users/'.$_SESSION['username']."/".$_SESSION['eventname']);
}
?>
<?php 

$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/register.html", "w") or die("Unable to open file!");
include 'choice.php';
$a  = "<html>
        <head>

        <meta name= \"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"../../../bootstrap/css/bootstrap.min.css\">
        <script src=\"../../../bootstrap/jquery-3.4.1.min.js\"></script>
        <script src=\"../../../bootstrap/js/bootstrap.min.js\"></script>
    </head>

    <style>
        body{
            background-image: url('".${background.$_SESSION['background']}."');
            background-size: cover;   
        }
        .my-navbar{
            padding-top: 10px;
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
        .my-sub-navbar{
            color: white;
            letter-spacing: 1px;
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
            margin-top: 30px;
            height: 70%;
            margin-right: 10px;
            margin-left: 10px;
        }
        .my-form{
            height: 74%;
            overflow: scroll;
        }
        .my-form input{
            width: 90%;
        }
        .my-form select{
            width: 90%;
        }
        .my-jumbotron{
            font-size: 20px;
            padding: 15px !important;
            margin-bottom: 10px !important;
        }
    </style>

    <body>
        <div class = \"my-black-box\"></div>

        <nav class = \"navbar my-navbar pb-0 pt-4\">
            <div class = \"my-navbar-title my-relative-ver-center navbar-brand\">";
                $a .=  strtoupper($_SESSION['eventname']);
           $a .= "</div>
        </nav>

        <nav class = \"navbar my-navbar m-0 pt-0\">
            <div class = \"my-navbar-sub-title my-relative-ver-center\">";
                $a .=  strtoupper($_SESSION['eventdescription']);
           $a .= "</div>
        </nav>
        
        <div class = \"row my-row\">
            <div class = \"col-md-4\"></div>
            <div class = \"col-md-4 my-col bg-light rounded p-0 h-100\">
                <div class = \"jumbotron text-center my-jumbotron sticky-top\">
                    Register
                </div>

                <form class = \"my-form m-4 ml-5\" action=\"register1.php\" method = \"POST\">";?>
                    <?php
                        $count = $_SESSION['selectedfieldcount'];
                        $selectedfield = $_SESSION['selectedfield'];
                        $fields = explode(",",$selectedfield);
                        for ($i = 0; $i<$count;$i++){
                            if(strpos($fields[$i],"d") !== false)
                            {
                                $number = substr($fields[$i],-1);
                                $a .=  "<div class = \"form-group\"><input class = \"form-control \" placeholder=\"".${"defaultfieldname".$number}."\" id = \"".${"defaultfieldname".$number}."\" name = \"".str_replace(" ","",${"defaultfieldname".$number})."\"  type = \"".${"defaultfieldtype".$number}."\" value = '' required/>
                                </div>";
                            }
                            else
                            {
                                $number = substr($fields[$i],-1);
                                if($_SESSION["addedfieldtype".$number] === "Drop Down"){
                                    $a .= "<div class = \"form-group\"><select class = \"form-control \"  id = \"".$_SESSION["addedfieldname".$number]."\" name = \"".str_replace(" ","",$_SESSION["addedfieldname".$number])."\"  value = '' required/>";
                                    $a .= "<option>".$_SESSION["addedfieldname".$number]."</option>";
                                    $a .= $_SESSION["addedfielddropdownlist".$number];
                                    $a .= "</select>";
                                    $a .= "</div>";
                                }
                                else{
                                    $a .= "<div class = \"form-group\"><input class = \"form-control \" placeholder=\"".$_SESSION["addedfieldname".$number]."\" id = \"".$_SESSION["addedfieldname".$number]."\" name = \"".str_replace(" ","",$_SESSION["addedfieldname".$number])."\"  type = \"".$_SESSION["addedfieldtype".$number]."\" value = '' required/>
                                    </div>";
                                }
                                
                            }
                        }
                        
                        $a .= "<div class = \"form-group mt-3\">";
                        $a .= "<button class = \"btn btn-primary my-relative-ver-center\">REGISTER</button>";
                        $a .= "</div>";
                        
                       
                    ?>
                    
    
                    <?php


                $a .= "</form>

            </div>
            <div class = \"col-md-4\"></div>
        </div>
    </body>
</html>";
fwrite($myfile, $a);
fclose($myfile);
header("Location: createregistrationbackend.php");

?>