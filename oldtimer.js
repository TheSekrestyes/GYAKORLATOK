//objektumokat tartalmaz� t�mb:

let autok=[
    {id: 1, nev:"Trabant 601"},
    {id: 2, nev:"Moszkvics 408"},
    {id: 3, nev:"DeLorean DMC-12"},
    {id: 4, nev:"Cadillac Fleetwood Brougham"},
    {id: 5, nev:"Ferrari 348"},
    {id: 6, nev:"1970 Ford Mustang Boss 302"},
]
//a nem el�rhet� aut�k azonos�t�i:
let nemElerhetoekID=[1,4,6]

window.addEventListener('load', function(){
    for(auto of autok){
        if(nemElerhetoekID,includes(auto.id)){
            document.getElementById('nem-elerheto').innerHTML+=auto.nev+", ";
        }
    }     
})

function velemenyKuldes(){
    if(document.getElementById("velemenyInput").value==""){
        alert("Üres bejegyzés nem küldhető");
    }
    else{
        alert("Véleménye fontos számunkra");
        document.getElementById("velemenyInput").value="";
    }
}
