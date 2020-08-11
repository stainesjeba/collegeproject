
function getroot(n){
    $.post(n+'getusername.php',{},
    function (data,status){
        if(data == "0"){
            window.location.replace("../Login");
        }
        else{
            $("#username").text(data);
        }
        
    }
    )
}

function logout(n){
    if(n == undefined){
        alert();
        n = "";
    }

    $.post(n+'logout.php',{},
    function (data,status){
        if(data == "1"){
            window.location.replace("../Login");
        } 
    }
    )
}