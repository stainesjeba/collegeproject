<?php
session_start();
$defaultfieldname1 = "Name";
$defaultfieldtype1 = "text";
$defaultfieldname2 = "Mobile Number";
$defaultfieldtype2 = "number";
$defaultfieldname3 = "Mail Id";
$defaultfieldtype3 = "email";

$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/register1.php", "a+") or die("Unable to open file!");
$a = "";
$a .= "<?php $"."conn = new mysqli(\"Localhost\",\"root\",\"\",\"".$_SESSION['username']."\");\n";
$a .= "$"."sql = \"select max(Pid) as id from `".$_SESSION['eventname']."`\"; \n";
$a .= "$"."result = $"."conn->query($"."sql);\n";
$a .= "$"."row = mysqli_fetch_assoc($"."result);\n";
$a .= "$"."id = $"."row['id']+1;\n";
$count = $_SESSION['selectedfieldcount'];
$selectedfield = $_SESSION['selectedfield'];
$fields = explode(",",$selectedfield);


$a .=  "$"."sql = \"insert into  `".$_SESSION['eventname']."` values ($"."id,";
for ($i = 0; $i<$count;$i++){
    if(strpos($fields[$i],"d") !== false)
    {   
        $number = substr($fields[$i],-1);
        $a .=  "'\".$"."_POST['".str_replace(" ","",${"defaultfieldname".$number})."'] .\"',";
    }
    else{
        $number = substr($fields[$i],-1);
        $a .=  "'\".$"."_POST['";
        $a .=  str_replace(" ","",$_SESSION['addedfieldname'.$number])."'] .\"',";
    }
}
$a .=  "0,0)\";\n";
$a .=  ("if("."$"."conn->query($"."sql)){\n");
$a .=  "header('Location: home.html?1');}\n";
$a .=  "else{header('Location: home.html?0')\n;}
?>";
fwrite($myfile, $a);
fclose($myfile);
header("Location: createadminlogin.php");
?>