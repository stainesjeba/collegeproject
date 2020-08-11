<?php
session_start();
$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/mail.php", "w") or die("Unable to open file!");
$a = "<?php
    $"."id = $"."_POST['Pid'];
    $"."conn = new mysqli(\"Localhost\",\"root\",\"\",\"".$_SESSION['username']."\");
    $"."result = $"."conn->query(\"select `Mail Id` from `".$_SESSION['eventname']."`where `Pid` = \".$"."id);
    $"."result = $"."conn->query(\"Update `".$_SESSION['eventname']."` set `Mail Status` = 1 where `Pid` = \".$"."id);
?>";

fwrite($myfile, $a);
fclose($myfile);

header("Location: createadmindelete.php");

?>