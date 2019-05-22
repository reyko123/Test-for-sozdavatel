document.querySelector("header").onclick = function(f){
    var thisType = f.target.dataset.type;
    if(thisType) document.querySelector("section").className = thisType;
}
