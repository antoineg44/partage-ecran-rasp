
function eteindre() {
    console.log("eteindre");
    $.ajax({
        type: 'GET',
        url: '../php/fonctions/eteindre.php',
        data: 'id',
        success: function(data){
            console.log(data);
        }
      });
}

function reboot() {
    console.log("reboot");
    $.ajax({
        type: 'GET',
        url: '../php/fonctions/phpreboot.php',
        data: 'id',
        success: function(data){
            console.log(data);
        }
      });
}

function veille() {
    console.log("veille");
    $.ajax({
        type: 'GET',
        url: '../php/fonctions/veille.php',
        data: 'id',
        success: function(data){
            console.log(data);
        }
      });
}

function unveille() {
    console.log("unveille");
    $.ajax({
        type: 'GET',
        url: '../php/fonctions/unveille.php',
        data: 'id',
        success: function(data){
            console.log(data);
        }
      });
}

function fermerNavi() {
    console.log("unveille");
    $.ajax({
        type: 'GET',
        url: '../php/fonctions/fermerNavi.php',
        data: 'id',
        success: function(data){
            console.log(data);
        }
      });
}