function jelszo(){
    if(document.getElementById('pw1').value==""){
        alert("Üres jelszó mező!");
    }
    else if(document.getElementById('pw1').value!=document.getElementById('pw2').value){
        alert("Nem megegyező jelszó!");
    }
}