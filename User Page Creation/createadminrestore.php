
<?php

session_start();

$myfile = fopen("../Users/".$_SESSION['username']."/".$_SESSION['eventname']."/restore.php", "w") or die("Unable to open file!");
$a = "<?php

$"."id = $"."_POST['Pid'];
$"."conn = new mysqli(\"Localhost\",\"root\",\"\",\"".$_SESSION['username']."\");
$"."result = $"."conn->query(\"Update   `".$_SESSION['eventname']."` set `Delete Status` = 0 where `Pid` = \".$"."id);

?>";

fwrite($myfile, $a);
fclose($myfile);

include '../Login/Db_Connection.php';

$sql = "select `User Id` from `Log In` where `User Name` = '".$_SESSION['username']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_id = $row['User Id'];

$sql = "select max(`Event Id`) as a from `Fact Event`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$event_id = $row['a'];

$event_id = $event_id+1;


$sql = "insert into `Fact Event` values (".$event_id.",".$user_id.",'".$_SESSION['eventname']."','../".$_SESSION['username']."/".$_SESSION['eventname']."/home.html','../".$_SESSION['username']."/".$_SESSION['eventname']."/adminlogin.php','".date('d.m.Y')."')";
echo $sql;
$conn->query($sql);

header("Location: ../New Event/Fourth Page.php");

?>