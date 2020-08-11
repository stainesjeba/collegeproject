<?php
    session_start();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/4bd347a694.js" crossorigin="anonymous"></script>

        <script src = "../Home/load.js"></script>
        <script src = "navbar.js"></script>
        <link rel="stylesheet" href = "navbar.css">

        <style>
            .my-navbar-title{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                font-size: 18px;
                letter-spacing: 1px;
            }
            .my-pagination{
                position: absolute; 
                bottom: 30px !important;
                left: 50%;
                transform: translateX(-50%);
            }
            .space-pre-nex{
                width: 15vw;
                background: none;
            }
            .my-row{
                height: 60%;
                margin: 5px;
                margin-top: 30px;
            }
            .my-right-border{
                border-right: 1px solid black;
            }
            .my-jumbotron{
                padding: 20px;
                text-align: center;
                background: #dee1e4;
            }
            .my-inner-jumbotron{
                padding: 5px;
                text-align: center;
            }
            .my-cursor-none{
                cursor: not-allowed !important;
                opacity: .5;
            }
            .my-next-button{
                padding: 5px;
                width: 100px;
            }
            .my-grid-align-fields{
                display: grid;
                grid-template-columns: 40% 40% 20%;
                margin: 5px;
                padding: 5px;
                text-align: center;
                font-size: 14px;
            }
            .my-border-line{
                border-bottom: 1px solid rgb(151, 151, 151);
                margin-top:2px;
                margin-bottom: 5px;
            }
            .my-col{
                overflow: scroll;
            }
            .my-relative-hor-center{
                position: relative;
                left: 50%;
                transform: translateX(-50%);
            }
            .my-form{
                margin-left: 20px;
                overflow: scroll;
                height: 73%;
            }
            .my-dropdown-list-box{
                background: white;
                height: 200px;
                overflow : scroll;
            }
            .my-grid-dropdown-list{
                display: grid;
                grid-template-columns: 80% 20%;
                height: 40px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 5px;
                padding-bottom: 5px;
                border-radius: 5px;
            }
            .my-outline-none{
                outline: none;
            }
            .my-scroll{
                overflow: scroll;
            }
        </style>
    </head>

    <body onload="getroot('../Home/');getnavbar('../Home/')" >

        <nav class = "navbar align-content-center">
            <div class = "my-navbar-title text-light">Registration Page Fields</div>
        </nav>

        <div class="container">
                
            <div class = "row my-row">
                
                <div class = " col-sm-1"></div>
                <div class = "col-sm-5 h-100 bg-light rounded-left my-right-border p-0 my-scroll" id = "defaultfield">
                    <form onsubmit = "return fieldsubmit()" action = "updateselectedfield.php" method = "POST">
                        <input class = "d-none" name = "selectedfield" id = "selectedfield">
                        <input class = "d-none" name = "selectedfieldcount" id = "selectedfieldcount">
                        <div class = "jumbotron my-jumbotron sticky-top mb-2">
                                Fields
                            </div>
        
                            <!--Default Fields-->
                            <div class = "my-default-fields">
                                <div class = "jumbotron my-inner-jumbotron mb-2">
                                    Default Fields
                                </div>
        
                                <!--Default Fields Heading-->
                                <div class = "my-grid-align-fields">
                                    <div class = "font-weight-bold my-grid-align-fields-inner">Field Name</div>
                                    <div class = "font-weight-bold my-grid-align-fields-inner">Field Type</div>
                                    <div class = "font-weight-bold my-grid-align-fields-inner">Needed</div>
                                </div>
                                <div class = "my-border-line"></div>
        
                                <!--Default Field Name-->
                                <div class = "my-grid-align-fields">
                                    <div class = "my-grid-align-fields-inner">Name</div>
                                    <div class = "my-grid-align-fields-inner">Plain Text</div>
                                    <div class = "my-grid-align-fields-inner"><input type = "checkbox" class = "m-1" checked value = "d1"  name = "field"/></div>
                                </div>
                                <div class = "my-border-line"></div>
        
                                <!--Default Field Mobile-->
                                <div class = "my-grid-align-fields">
                                    <div class = "my-grid-align-fields-inner">Mobile</div>
                                    <div class = "my-grid-align-fields-inner">Number</div>
                                    <div class = "my-grid-align-fields-inner"><input type = "checkbox" class = "m-1" value = "d2" checked name = "field"/></div>
                                </div>
                                <div class = "my-border-line"></div>
        
                                <!--Default Field Mobile-->
                                <div class = "my-grid-align-fields">
                                    <div class = "my-grid-align-fields-inner">Email Id</div>
                                    <div class = "my-grid-align-fields-inner">Email</div>
                                    <div class = "my-grid-align-fields-inner"><input type = "checkbox" class = "m-1" value = "d3" checked name = "field"/></div>
                                </div>
                                <div class = "my-border-line"></div>
                            </div>
        
        
                            <!--Added Fields-->
                            <div class = "my-default-fields">
                                <div class = "jumbotron my-inner-jumbotron mt-3 mb-2">
                                    <div class = "d-flex justify-content-around">
                                        <div>Added Fields</div>
                                        <div class = 'fas fa-plus align-self-center d-md-none text-primary' onclick = "showaddnewfield()"></div>
                                    </div>
                                   

                                </div>
                                <div id = "addedfields">
                                    <?php 
                                    if(isset ($_SESSION['addedfieldcount']) ){
                                        echo "<div class = \"my-grid-align-fields\">";
                                        echo "<div class = \"font-weight-bold my-grid-align-fields-inner\">Field Type</div>";
                                        echo "<div class = \"font-weight-bold my-grid-align-fields-inner\">Field Name</div>";
                                        echo "<div class = \"font-weight-bold my-grid-align-fields-inner\">Needed</div>";
                                        echo "</div>";
                                        $count = $_SESSION['addedfieldcount'];
                                        $reversecount = 1;
                                        while($count > 0){
                                            echo "<div class = \"my-grid-align-fields\">";
                                            echo "<div class = \"my-grid-align-fields-inner\">".$_SESSION['addedfieldname'.$reversecount]."</div>";
                                            echo "<div class = \"my-grid-align-fields-inner\">".$_SESSION['addedfieldtype'.$reversecount]."</div>";
                                            echo "<div class = \"my-grid-align-fields-inner\"><input type = \"checkbox\" class = \"m-1\" checked value = \"a".$reversecount."\" name = \"field\"/></div>";
                                            echo "</div>";
                                            echo "<div class = \"my-border-line\"></div>";
                                            $count--;
                                            $reversecount++;
                                        }
                                    }
                                    else{
                                        echo "<div id = \"adddedfields\" class = \"text-center text-danger\">Not yet added</div>";
                                    }
                                    ?>
                                
                                </div>
                            </div>
        
        
                            <button class = "btn btn-primary mx-auto my-relative-hor-center mt-2" >Submit</button>
                    </form>
                </div>
                <div class = "col-sm-5 h-100 p-1 bg-light rounded-right my-col d-none d-md-block" id = "addnewfield">
                        <div class = "jumbotron my-jumbotron sticky-top mb-2">
                                Add New Fields
                            </div>
        
                            <form class = "my-form" id = "newfieldform" onsubmit="return submit_new_field()">
                                <div class = "form-group">
                                    <label for = "fieldname">Field Name</label>
                                        <input class = "form-control w-75" placeholder="Field Name" id = "fieldname" name = "fieldname"
                                        value = ''required/>
                                </div>
        
                                <div class = "form-group">
                                    <label for = "eventname">Field Type</label>
                                    <select class = "form-control w-75"  id = "fieldtype" name = "fieldtype" value = '' onchange = "decide_to_show_dropdown_list(this)"required >
                                        <option>Plain Text</option>
                                        <option>Number</option>
                                        <option>Email</option>
                                        <option>Drop Down</option>
                                    </select>
                                </div>
        
                                <div class = "form-group my-dropdown-list-box w-75 p-2 rounded d-none" id = "dropdownfield">
                                    <label class = "my-grid-dropdown-list w-100 bg-light sticky-top">
                                        <div >Drop Down List</div>
                                        <div class = "d-inline text-right"><img src = "addicon.webp" class = "w-100 h-100" onclick = "addnewdropdownfield()"></div>
                                    </label>
                                    <div class ="form-group mt-3 mb-2" >
                                        1.<input type = "text" id = "addeddropdownlist1" class = "ml-2 w-75 rounded" value = ""/>
                                    </div>
                                    <div class ="form-group mt-3 mb-2">
                                        2.<input type = "text" id = "addeddropdownlist2" class = "ml-2 w-75 rounded" value = ""/>
                                    </div>
                                    <div class ="form-group mt-3 mb-2">
                                        3.<input type = "text" id = "addeddropdownlist3" class = "ml-2 w-75 rounded" value = ""/>
                                    </div>
                                </div>
        
                                <div class = "form-group">
                                    <?php
                                        if(isset($_SESSION['addedfieldcount'])){
                                            if($_SESSION['addedfieldcount'] > 6){
                                                echo "<div class = \"text-center text-danger\">Maximum Reached</div>";
                                                echo "<button class = \"btn btn-primary my-relative-hor-center mt-2 disabled my-cursor-none\"disabled>Add</button>";
                                            }
                                            else{
                                                echo "<div class = \"text-center text-danger d-none\" id = \"warningmessagefield\">Maximum Reached</div>";
                                                echo "<button class = \"btn btn-primary my-relative-hor-center mt-2\" onclick = \"checkaddedfieldcount()\" id=\"addfieldsubmitbutton\">Add</button>";
                                            }
                                            
                                        }
                                        else{
                                            echo "<div class = \"text-center text-danger d-none\" id = \"warningmessagefield\">Maximum Reached</div>";
                                            echo "<button class = \"btn btn-primary my-relative-hor-center mt-2\" id=\"addfieldsubmitbutton\" onclick = \"checkaddedfieldcount()\" >Add</button>";
                                        }
                                            
                                    
                                    ?>
                                    
                                </div>
                            </form>
                </div>
                <div class = "col-sm-1"></div>
            </div>

            <ul class="pagination justify-content-center my-pagination mb-0 disabled">
                <li><button class="rounded my-next-button" onclick = "window.location.replace('First Page.php')" id = "nextbutton">Previous</button></li>
                <li class = "space-pre-nex"></li>
                <?php
                    if(isset($_SESSION['selectedfield'])){
                        echo "<li><button class=\"rounded my-next-button\" onclick = \"window.location.replace('Third Page.html')\" id = \"nextbutton\">Next</button></li>";
                    }
                    else{
                        echo "<li><button class=\"rounded  my-cursor-none my-next-button\" disabled  id = \"nextbutton\">Next</button></li>";
                    }
                    
                ?>
                
            </ul>
        </div>

        <script>

            
            var drop_down_field_count = 3;
            var added_field_count = <?php if(isset($_SESSION['addedfieldcount'])){echo $_SESSION['addedfieldcount'];}else{echo 0;}?>;
            function addnewdropdownfield(){
                if(drop_down_field_count < 6){
                    var a = "<div class =\"form-group mt-3 mb-2\" >"+(++drop_down_field_count)+".<input type = \"text\" class = \"ml-2 w-75 rounded\" id = \"addeddropdownlist"+drop_down_field_count+"\" /></div>";
                    $("#dropdownfield").append(a);
                    $("#addeddropdownlist"+drop_down_field_count).focus();
                }
                else{
                    if(drop_down_field_count == 6){
                        var a = "<div class = \"text-danger text-center\" id = \"maxlimit\" tabindex='1'>Max Limit Reached</div>";
                        $("#dropdownfield").append(a);
                        $("#maxlimit").focus();
                        $("#maxlimit").addClass("my-outline-none");
                        drop_down_field_count++;
                    }
                    else{
                        $("#maxlimit").focus();
                    }
                
                }
               
            }

            function decide_to_show_dropdown_list(n){
               if(n.value == "Drop Down"){
                $("#dropdownfield").removeClass("d-none");
               }
               else{
                $("#dropdownfield").addClass("d-none");
               }
            }

            function submit_new_field(){
                //return false;
                var dropdownfield = "";
                var dropdownfield1;
                var count=0;
               
                
                for(var i =1;i<=drop_down_field_count;i++){
                    if($("#addeddropdownlist"+i).val() != ""){
                    dropdownfield += "<option>"+$("#addeddropdownlist"+i).val()+"</option>"
                    count++;
                    }
                }
                
                if($("#fieldtype").val() == "Drop Down"){
                    if(count<2){
                        alert("Atleast two drop down list text are needed");
                        return false;
                    }
                }
                
                $.post("addnewfield.php",{
                    
                    fieldname: $("#fieldname").val(),
                    fieldtype: $("#fieldtype").val(),
                    dropdownfields: dropdownfield
                    },function(data,status){
                        loadaddedfield();
                        $("#newfieldform").trigger("reset");
                        $("#addnewfield").addClass("d-none");
                        $("#defaultfield").removeClass("d-none");
                    });
                 return false;
            }

            function loadaddedfield(){
                $.post("fetchnewfield.php",{
                    },function(data,status){
                        $("#addedfields").html(data);
                });
            }

            function fieldsubmit(){
                var selected = "";
                var selected_field_count= 0;
                $('input[name="field"]:checked').each(function() {
                selected += (this.value);
                selected += ",";
                selected_field_count++;
                });
                $("#selectedfield").val(selected);
                $("#selectedfieldcount").val(selected_field_count);

            }

            function checkaddedfieldcount(){
                
                added_field_count++;
                if(added_field_count>5){
                    $("#warningmessagefield").removeClass("d-none");
                    $("#addfieldsubmitbutton").addClass("d-none");
                }
            }

            function showaddnewfield(){
                $("#addnewfield").removeClass('d-none');
                $("#defaultfield").addClass('d-none d-md-block');
            }
        </script>

    </body>

</html>