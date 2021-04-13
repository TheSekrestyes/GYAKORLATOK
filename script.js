window.addEventListener('load',Menu)

function Menu(){
    let array=document.links;
    let userUrl=document.URL;
    for (let index = 0; index < array.length; index++) {
        if(array[index].href == userUrl){
            document.links[index].style.color = "blue";
        }    
    }
}