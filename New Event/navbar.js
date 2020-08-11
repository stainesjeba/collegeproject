
function getnavbar(n){
    var a = "<div class = \"black-box w-100 h-100\"></div>";
    a = a+"<nav class = \"navbar my-navbar\">";
    a = a+"<div class = \"navbar-brand my-navbar-brand\"> Event Creator</div>";
    a = a+"<div class = \"my-username-div\">Hello <span id = \"username\" class = \"my-username\"></span>";
    a = a+"<img class = \"my-logout-image\" onclick = \"logout('"+n+"')\" src = \""+n+"shutdown3.png\"></div></nav>";
    $("body").prepend(a);
}
