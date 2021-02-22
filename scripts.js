function lekerdezAlcim(){
    console.log(document.title+"oke");
}

function kuldUzenet() {
    if(document.getElementById('inputNev').value && document.getElementById('inputEmail').value && document.getElementById('inputUzenet').value){
        alert("Köszönjük az üzentét");
    }
    else alert("Kérem töltse ki az összes mezőt!");
}


function lekerdezUzenetek() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            console.log(JSON.parse(this.responseText));
        }
    };
    xhttp.open("GET", "/api/uzenet");
    xhttp.send();
}

function torolUzenetek() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            console.log(JSON.parse(this.responseText));
        }
    };
    xhttp.open("DELETE", "/api/uzenet");
    xhttp.send();
}


$(document).ready(function(){
	$('.header').height($(window).height());
});

$('.test, .nav-link, .navbar-brand, .new-button').click(function() {
    var sectionTo = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(sectionTo).offset().top
    }, 100);
});

