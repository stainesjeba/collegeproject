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
        <script src = "navbar.js"></script>
        <link rel="stylesheet" href = "navbar.css">

        <style>
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
                height: 65%;
                margin: 5px;
                margin-top: 40px;
            }
            .my-col{
                
            }
            .my-jumbotron{
                padding: 20px;
                text-align: center;
            }
            .my-form{
                margin: 10px;
                margin-left: 30px;
                overflow: scroll;
                height: 70%;
                padding: 5px;
            }
            .my-form input{
                border: 0px;
                border-bottom: 1.5px solid rgb(150, 150, 150);
                border-radius: 0px;
                background: none;
            }
            .my-rel-hor-center{
                position: relative;
                left: 40%;
                transform: translateX(-40%);
            }
            .my-btn{
                top: 10px!important;
                margin-bottom: 10px!important;
            }
            .my-disable-button{
                back
            }
            .my-cursor-none{
                cursor: not-allowed !important;
                opacity: .5;
            }
            .my-next-button{
                padding: 5px;
                width: 100px;
            }
            
        </style>

       

        
    </head>

    <body onload="getroot('../Home/');getnavbar('../Home/')">

        <div class = "container">
            <div class = "row my-row">
                <div class = "col-md-3"></div>
                <div class = "col-md-6 h-100 bg-light rounded p-0 my-col">
                    <div class = "jumbotron my-jumbotron sticky-top">
                        Event Details
                    </div>

                    <form class = "my-form" id="myform" method = "POST" action = "firstpagedetails.php">
                        <div class = "form-group">
                            <label for = "eventname">Event Name</label>
                            <input class = "form-control w-75" placeholder="Name" id = "name" name = "eventname"
                            value = '<?php  if(isset($_SESSION['eventname'])){echo $_SESSION['eventname'];}?>' 
                            required/>
                        </div>

                        <div class = "form-group">
                            <label for = "description">Event Description</label>
                            <input class = "form-control w-75" placeholder="Description" id = "description" name = "eventdescription"
                            value = '<?php  if(isset($_SESSION['eventdescription'])){echo $_SESSION['eventdescription'];}?>' 
                            required/>
                        </div>

                        <div class = "form-group">
                            <label for = "startdate">Start Date</label>
                            <input class = "form-control w-75" type = "date" name = "startdate"
                            value = '<?php  if(isset($_SESSION['startdate'])){echo $_SESSION['startdate'];}?>' 
                            required/>
                        </div>

                        <div class = "form-group">
                            <label for = "enddate">End Date<span class = "text-info">(If required)</span></label>
                            <input class = "form-control w-75" type = "date" name = "enddate"
                            value = '<?php  if(isset($_SESSION['enddate'])){echo $_SESSION['enddate'];}?>' 
                            />
                        </div>

                        <div class = "form-group">
                            <label for = "starttime">Start time</label>
                            <input class = "form-control w-75" type = "time" name = "starttime"
                            value = '<?php  if(isset($_SESSION['starttime'])){echo $_SESSION['starttime'];}?>' 
                            required/>
                        </div>

                        <div class = "form-group">
                            <label for = "endtime">End time</label>
                            <input class = "form-control w-75" type = "time" name = "endtime"
                            value = '<?php  if(isset($_SESSION['endtime'])){echo $_SESSION['endtime'];}?>' 
                            required/>
                        </div>

                        <div class = "form-group">
                            <label for = "location">Location</label>
                            <input class = "form-control w-75" type = "text" placeholder="Location" name = "location"
                            value = '<?php  if(isset($_SESSION['location'])){echo $_SESSION['location'];}?>' 
                            required/>
                        </div>

                        <button class = "btn btn-primary mx-auto my-rel-hor-center my-btn" id = "submitbutton">Submit</button>
                       
                    </form>
                </div>
                <div class = "col-md-3"></div>
            </div>
            <ul class="pagination justify-content-center my-pagination disabled">
                <li><button class="rounded  my-cursor-none my-next-button" onclick = "formsubmit()" id = "nextbutton" disabled>Next</button></li>
            </ul>
        </div>
        
        <script>
            $(document).ready(function(){
                if($("#name").val() != ''){
                    $("#nextbutton").removeClass("my-cursor-none");
                    $("#nextbutton").removeAttr("disabled");
                }
                else{
                    $("#nextbutton").addClass("my-cursor-none");
                }
            });
            function formsubmit(){
                $("#submitbutton").trigger('click');
            }   
        </script>
    </body>
</html>