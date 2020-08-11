<?php 
session_start();
    if(isset($_SESSION['addedfieldcount']) ){
        $count = $_SESSION['addedfieldcount'];
        $reversecount = 1;
        $data = "";
        $data .= "<div class = \"my-grid-align-fields\">";
        $data .= "<div class = \"font-weight-bold my-grid-align-fields-inner\">Field Name</div>";
        $data .= "<div class = \"font-weight-bold my-grid-align-fields-inner\">Field Type</div>";
        $data .= "<div class = \"font-weight-bold my-grid-align-fields-inner\">Needed</div>";
        $data .= "</div>";
        while($count > 0){

        $data .=  "<div class = \"my-grid-align-fields\">";
        $data .= "<div class = \"my-grid-align-fields-inner\">".$_SESSION['addedfieldname'.$reversecount]."</div>";
        $data .= "<div class = \"my-grid-align-fields-inner\">".$_SESSION['addedfieldtype'.$reversecount]."</div>";

        if($count == 1){
            $data .= "<div class = \"my-grid-align-fields-inner\"><input type = \"checkbox\" class = \"m-1\" checked value = \"a".$reversecount."\" name = \"field\" autofocus/></div>";
        }
        else{
            $data .= "<div class = \"my-grid-align-fields-inner\"><input type = \"checkbox\" class = \"m-1\" checked value = \"a".$reversecount."\" name = \"field\"/></div>";
        }
        
        $data .= "</div>";
        $data .= "<div class = \"my-border-line\"></div>";
        $count--;
        $reversecount++;
        }
        echo $data;
    }
?>