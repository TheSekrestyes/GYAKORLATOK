function asd(){
    let fotoNev=document.getElementById('kep').src;
    if(fotoNev.indexOf('hBogart.jpg')==-1){
        document.getElementById('kep').src="hBogart.jpg";
    }
    else{
        document.getElementById('kep').src="";   
   }
}