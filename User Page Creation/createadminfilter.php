<?php
session_start();
$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/filter.php", "w") or die("Unable to open file!");
$a = "<?php
$"."filter = $"."_POST['filter'];
if($"."filter == \"1\"){
    $"."filter = \" where `Mail Status` = 1  and `Delete Status` = 0\";
}
elseif($"."filter == \"0\"){
    $"."filter = \" where `Mail Status` = 0 and `Delete Status` = 0\";
}
elseif($"."filter == \"-1\"){
    $"."filter = \" where `Delete Status` = 1\";
}
else{
    $"."filter = \" where `Delete Status` = 0\";
}

$"."conn = new mysqli(\"Localhost\",\"root\",\"\",\"".$_SESSION['username']."\");";
$conn = new mysqli("Localhost","root","",$_SESSION['username']);
$a .= "$"."result = $"."conn->query(\"select * from `".$_SESSION['eventname']."`\".$"."filter);
if($"."_POST['filter'] != '-1'){";
?>
<?php
        
        $a .= "while($"."row = $"."result->fetch_assoc()){
                echo \"<div class = 'my-grid-alignment'>\";";?>
                <?php
                $result = $conn->query("select * from `".$_SESSION['eventname']."`");
                while($row1 = $result->fetch_field())
                {
                    if($row1->name != "Pid" &&  $row1->name != "Mail Status" && $row1->name != "Delete Status"){
                        $a .=  "echo \"<div>\".$"."row['".$row1->name."'].\"</div>\";\n";
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
                    <div class = 'my-border-bottom w-100'></div>\";}}";
                                    
                                    
                    $a .= "\nif($"."_POST['filter'] == '-1'){";
       
                ?>

                <?php
                    $a .= "while($"."row = $"."result->fetch_assoc()){
                        echo \"<div class = 'my-grid-alignment'>\";";
                ?>

                <?php
                    $result = $conn->query("select * from `".$_SESSION['eventname']."`");
                        while($row1 = $result->fetch_field())
                            {
                                if($row1->name != "Pid" &&  $row1->name != "Mail Status" && $row1->name != "Delete Status"){
                                    $a .=  "echo \"<div>\".$"."row['".$row1->name."'].\"</div>\";\n";
                                }
                            }
                ?>
                                        
                <?php
                    $a .= "\n if($"."row['Mail Status'] == 1){
                        echo \"<div id = 'sendbutton\".$"."row['Pid'].\"'><button class = 'btn btn-success text-light disabled my-cursor-disabled'  onclick = 'mail(\".$"."row['Pid'].\")' disabled>Re-send</button></div>\";
                    }
                    else{
                        echo \"<div id = 'sendbutton\".$"."row['Pid'].\"'><button class = 'btn btn-success text-light disabled my-cursor-disabled'  onclick = 'mail(\".$"."row['Pid'].\")' disabled>Send</button></div>\";
                    }
                    echo \"<div><button class = 'btn btn-danger text-light' id = 'deletebutton\".$"."row['Pid']. \"' onclick = 'restoreparticipant(\".$"."row['Pid'].\")'>Restore</button></div></div>
                    <div class = 'my-border-bottom w-100'></div>\";
                    }
                    }\n ?>";
    fwrite($myfile, $a);
    fclose($myfile);
    header("Location: createadminmail.php");
?>