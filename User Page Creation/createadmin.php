<?php
session_start();

$conn = new mysqli("Localhost","root","",$_SESSION['username']);
$result = $conn->query("select * from `".$_SESSION['eventname']."`");
$numberoffields = mysqli_num_fields($result);
$numberoffields = $numberoffields-1;
$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/admin.php", "w") or die("Unable to open file!");
include 'choice.php';
$a = "<?php
session_start();
if(isset($"."_SESSION['adminlogin']) == false){
    header(\"Location: adminlogin.php\");
}

$"."conn = new mysqli(\"Localhost\",\"root\",\"\",\"".$_SESSION['username']."\");
$"."result = $"."conn->query(\"select * from `".$_SESSION['eventname']."` where `Delete Status` = 0\");
$"."numberoffields = mysqli_num_fields($"."result);
$"."numberoffields = $"."numberoffields-1;
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
                height: 65%;
                margin: 20px;
                margin-top: 30px;
                overflow: scroll;
            }
            .my-grid-alignment{
                display: grid;
                grid-template-columns: ";?><?php for($i = 1; $i<=$numberoffields;$i++){ $a .=  (100/$numberoffields).'% ';}?>;
                <?php $a .= ";\nword-wrap: break-word;
                text-align: center;
            }

            
            .my-border-bottom{
                border-bottom: 1px solid black;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .my-title{
                margin-top: 10px;
                background: rgb(219, 219, 219);
                margin-bottom: 10px;
            }
            .my-checkbox-grid{
                width: 100%;
                margin: auto;
                display: grid;
                grid-template-columns: 25% 25% 25% 25%;
            }
            .my-checkbox-grid input{
                margin-right: 10px!important;
            }
            .my-checkbox-form{
                width: 80%;
                background: rgb(214, 214, 214);
                margin: auto;
            }
            .my-cursor-disabled{
                cursor: not-allowed;
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
                        <?php
                    $a .= "</div>
                </nav>
                <nav class = \"navbar my-navbar m-0 pt-0\">
                    <div class = \"my-navbar-sub-title my-relative-ver-center\">
                        Admin
                    </div>
                </nav>

                <form class=\"form-inline mt-2 my-checkbox-form p-2 rounded\" >

                    <div class = \"my-checkbox-grid text-center\">
                        <div class=\"form-check my-form\">
                            <label class=\"form-check-label text-light\">
                                <input class=\"form-check-input\" type=\"radio\" name = \"filter\" checked onclick = \"filterfunction('all')\"> All
                            </label>
                        </div>
  
                         <div class=\"form-check\">
                            <label class=\"form-check-label text-success\">
                                <input class=\"form-check-input\" type=\"radio\" name = \"filter\" onclick = \"filterfunction('1')\"> Confirmed
                            </label>
                        </div>

                        <div class=\"form-check\">
                            <label class=\"form-check-label text-warning\">
                                <input class=\"form-check-input\" type=\"radio\" name = \"filter\" onclick = \"filterfunction('0')\" > Yet to Confirm
                            </label>
                        </div>

                        <div class=\"form-check\">
                            <label class=\"form-check-label text-danger\">
                                <input class=\"form-check-input\" type=\"radio\" name = \"filter\" onclick = \"filterfunction('-1')\"> Deleted
                            </label>
                        </div>
                    </div>
                   
                    
                  </form>
                <div class = \"row my-row\">

                    
                   
                    <div class = \"col-md-12 bg-light rounded\">

                            

                        <div class = \"my-grid-alignment text-center my-title p-3 rounded sticky-top\">";?> <?php
                            
                        while($row1 = $result->fetch_field())
                        {
                            if($row1->name != "Pid"){
                                $a .=  "<div>".$row1->name."</div>";
                            }
                            
                        }
                    ?>
                    <?php
                $a .= "</div>
                        
                            <div id = \"griddata\">

                       
                            <?php
                                while($"."row = $"."result->fetch_assoc()){
                                    echo \"<div class = 'my-grid-alignment'>\";";?>
                                <?php
                                $result = $conn->query("select * from `".$_SESSION['eventname']."`");
                                    while($row1 = $result->fetch_field())
                                    {
                                        if($row1->name != "Pid" &&  $row1->name != "Mail Status" && $row1->name != "Delete Status"){
                                        $a .=  "echo \"<div>\".$"."row['".$row1->name."'].\"</div>\";";
                                    }
                            
                                }
                                ?>
                                    
                                    <?php
$a .= "\nif($"."row['Mail Status'] == 1){
    echo \"<div id = 'sendbutton\".$"."row['Pid'].\"'><button class = 'btn btn-success text-light'  onclick = 'mail(\".$"."row['Pid'].\")'>Re-send</button></div>\";
}
else{
    echo \"<div id = 'sendbutton\".$"."row['Pid'].\"'><button class = 'btn btn-success text-light'  onclick = 'mail(\".$"."row['Pid'].\")'>Send</button></div>\";
}

        echo \"<div><button class = 'btn btn-danger text-light' id = 'deletebutton\".$"."row['Pid']. \" ' onclick = 'deleteparticipant(\".$"."row['Pid'].\")'>Delete</button></div></div>
                                    <div class = 'my-border-bottom w-100'></div>\";}?>";
                                    
                                    
                                    $a .= "</div>

                                    </div>
                    
                </div>

                <script>
                    var filter = \"all\";
                    var pid;
                    function mail(id){
                        $.post('mail.php',{
                            Pid : id
                        },
                        function(data,status){
                            pid = id;
                            
                            filterfunction(filter)
                        }
                        );
                    }
                    
                    function filterfunction(n){
                        filter = n;
                        $.post('filter.php',
                        {
                            filter: n
                        },function(data,status){
                            $(\"#griddata\").html(data);
                            $(\"#sendbutton\"+pid).append(\"<div class = 'text-success'>Mail Sended</div>\");
                        });
                    }

                    function deleteparticipant(id){
                        $.post('delete.php',{
                            Pid : id
                        },
                        function(data,status){

                            filterfunction(filter)
                        }
                        );
                    }

                    function restoreparticipant(id){
                        $.post('restore.php',{
                            Pid : id
                        },
                        function(data,status){
                            filterfunction(filter)
                        }
                        );
                    }
                </script>

               
        </body>

</html>";
fwrite($myfile, $a);
fclose($myfile);
header('Location: createadminfilter.php')

?>