function velemenyKuldes(){
    if(document.getElementById("jatek-valasz").value==""){
        alert("Üres bejegyzés nem küldhető");
    }
    else{
        alert("Köszönjük, hogy részt vesz a játékunkban!");
        document.getElementById("jatek-valasz").value="";
    }
}