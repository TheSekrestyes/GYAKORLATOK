window.addEventListener('load',init)

function init(){
    document.getElementById('btn').addEventListener('click',listaz);
}

function listaz(){

    let tol=parseInt(document.getElementById('tol').value);
    let ig=parseInt(document.getElementById('ig').value);
    if(ig<=tol) alert("Az ig szám legyen nagyobb a tól számnál!")
    
    let primszamok=[];
    for (let szam = tol; szam <= ig; szam++){
        prim=true;
        for (let index = 2; index < szam; index++){
            if(szam%index==0){
                prim=false;
                break;
            }
        }
        if(prim){
            primszamok.push(szam);
        }
    }
    let sorrend=2;
    let radioTomb=document.getElementsByName('rad');
    for(const element of radioTomb){
        if(element.checked){
            sorrend=element.value;
        }
    }
    
    document.getElementById('lista').innerHTML="";
    if(sorrend==0){
        primszamok.forEach(element => {
            document.getElementById('lista').innerHTML+="<li>"+element+"</li>";
        });
    }
    else{
        primszamok.reverse().forEach(element => {
            document.getElementById('lista').innerHTML+="<li>"+element+"</li>";
        });
    }
}