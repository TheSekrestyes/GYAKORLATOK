function szamol(){
    var moa=document.getElementById('moa').value;
    var mosz=document.getElementById('mosz').value;

    var ered=(moa/mosz)*100;
    document.getElementById('eredmeny').innerHTML= ered.toFixed(2);
}