<?php
session_start();
?>
<?php
 if(isset($_POST['background'])){   
        $_SESSION['background'] = $_POST['background'];
        header("Location: ../User Page Creation/home.php");
 }
   
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
           
           
            @media only screen and (min-width: 600px) {
            .my-col{
                display: inline-block;
                width: 100%;
                height: 100%;
                white-space: normal;
                position: relative;
                cursor:pointer;
            }
            .my-img{
                width: 100%;
                height: 100%;
            }
            .my-img:hover{
               border: 9px solid white;
            }
            img{
                width: 100%;
                height: 100%;
                padding: 0px;
            }
            .my-row{
                height: 65%;
                width: 99%;
                background: rgba(0, 0, 0, 0.315);
                white-space: nowrap;
                overflow-x: auto;
                overflow-y: hidden;
            }
            }

            @media only screen and (max-width: 600px) {
            .my-img{
                width: 90%;
                height: 50%;
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                bottom:5px;
            }
           
            img{
                width: 100%;
                height: 100%;
                padding: 0px;
            }
            .my-col{
                margin-top: 5px;
                margin-bottom: 10px;
            }
            .my-row{
                height: 75%;
                width: 99%;
                background: rgba(0, 0, 0, 0.315);
                overflow-x: hidden;
                overflow-y: auto;
            }
            }


            
           
            
        </style>

       

        
    </head>

    <body onload="getroot('../Home/');getnavbar('../Home/')">
        <nav class = "navbar align-content-center">
                <div class = "my-navbar-title text-light">Background for your page</div>
        </nav>
        <div class = "container">
            <div class = "p-2 p-md-5 my-row rounded mt-3 mt-md-5">
                <form action = "" method = "POST">
                <div class = "col-12 col-md-6 my-col p-0">
                    <input type = "image"  class = "my-img rounded" src = "../User Page Creation/background/background.jpeg"  value = "1" onclick = "getval('1')">
                </div>
                <div class = "col-12 col-md-6 my-col p-0">
                    <input type = "image"  class = "my-img rounded" src = "../User Page Creation/background/food-background.jpg"  value = "2" onclick = "getval('2')">
                </div>
                <div class = "col-12 col-md-6 my-col p-0">
                        <input type = "image"  class = "my-img rounded" src = "../User Page Creation/background/singing4.jpeg"  value = "3" onclick = "getval('3')">
                </div>


                <div class = "col-12 col-md-6 my-col p-0">
                        <input type = "image"  class = "my-img rounded" src = "../User Page Creation/background/stand.jpg"  value = "4" onclick = "getval('4')">
                </div>

                <div class = "col-12 col-md-6 my-col p-0">
                        <input type = "image"  class = "my-img rounded" src = "../User Page Creation/background/dance1.jpg"  value = "5" onclick = "getval('5')">
                </div>

                <input class = "d-none" id = "input" name = "background" >
            </form>
            </div>
        </div>

        <script>
            function getval(n){
            $("#input").val(n);
            $("form").submit();
            }
        </script>
    </body>


    

    </html>