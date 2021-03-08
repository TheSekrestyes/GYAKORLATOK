function szamol(){
    var moa=document.getElementById('moa').value;
    var mosz=document.getElementById('mosz').value;

    document.getElementById('eredmeny').innerHTML= (moa/(moa+mosz)*100).toFixed(2);
}