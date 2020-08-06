function showCode(){
    var c = document.getElementById("csc");
    if(c.style.display === "none"){
        c.style.display = "block";
    }else{
        c.style.display = "none";
    }
}

function sizing(){
    var sw = screen.width;
    var titleParts = document.getElementsByClassName("title-pt");

    if(sw <= 1200){
        
        for(var i= 0; i< titleParts.length;i++){
            titleParts[i].style.textAlign = "center";
        }
        
       
    }
    if(sw <= 600){
        document.getElementById("links").style.fontSize = "3vmin";
        
        for(var j= 0; j< titleParts.length;j++){
            titleParts[j].style.fontSize = "6vmin";
        }
    }

}

function revealQuestion(index){
    var ans = document.getElementsByClassName("answer")[index];

        ans.classList.toggle('is-active');
}
function toggleMode(){
   var currColor = document.getElementById("toggle-btn").style.backgroundColor;
   alert(currColor); 
}