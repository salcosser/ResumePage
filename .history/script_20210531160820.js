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
var dark = "rgb(27, 44, 44)";
function toggleMode(){
    
    
    

    let body = document.getElementsByTagName("body")[0];
    
    if(body.style.backgroundColor ==  "white"){
        document.getElementsByTagName("body")[0].style.backgroundColor = dark;
        document.getElementsByTagName("body")[0].style.color = "white";
        sessionStorage.setItem("mode","Dark");
        
    }else{
        document.getElementsByTagName("body")[0].style.backgroundColor = "white";
        document.getElementsByTagName("body")[0].style.color = dark;
        sessionStorage.setItem("mode","Light");
    }


}
function setMode(){
    let defMode = sessionStorage.getItem("mode");
    if(defMode == "Dark"){
        document.getElementsByTagName("body")[0].style.backgroundColor = dark;
        document.getElementsByTagName("body")[0].style.color = "white";
        // var links = document.getElementById("links");
        // if( links != null){
        //    document.getElementById("links").style.backgroundColor = dark;
        //     console.log("toggling");
        // }
        
    }else if(defMode == "Light"){
        document.getElementsByTagName("body")[0].style.backgroundColor = "white";
        document.getElementsByTagName("body")[0].style.color = dark;
        // var links = document.getElementById("links");
        // if( links != null){
        //    document.getElementById("links").style.backgroundColor = "white";
        //     console.log("toggling");
        // }
    }
}