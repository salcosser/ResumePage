<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sam Alcosser's Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="script.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="main.css">
  </head>
  <body onload="javascript:fade(document.getElementById('prologue'));getResolution();">
  <script>
   window.onscroll = function() {stick()};


    var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stick() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

   var prologue = document.getElementById('prologue');
    function fade(element) {
      setTimeout(function(){
        var op = 1;  // initial opacity
        var timer = setInterval(function () {
        if (op <= 0.08){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.08;
    }, 50);
      },3500);
  
}
 
  </script>
 <div id="prologue">
    <blockquote class="blockquote text-center">
  <p class="mb-0" ><i>"No problem can be solved from the same level of conciousness that created it."</i></p>
  <footer class="blockquote-footer" style="color:white">Albert Einstein</footer>
      </blockquote>

  
  </div>

</div>
<div id="rContent">
<nav class="nav navbar-expand-sm bg-dark navbar-dark nbar" id="navbar">
  <li class="nav-item">
    <a class="nav-link active" href="index.php" tabindex="-1" aria-disabled="true"><i class="fa fa-home" aria-hidden="true"></i>
</a>
  </li>
  <li class="nav-item">
    
       <a class="nav-link active" href="WorkoutTracker.php">Workout Tracker</a>
  </li>
  <li class="nav-item">
    
       <a class="nav-link active" href="teamrcf.php">Team RCF Website (Not Live)</a>
  </li>
  <li class="nav-item">
    
       <a class="nav-link active" href="pywar.php">pyWar</a>
  </li>
   <li class="nav-item">
    
       <a class="nav-link active" href="QnA.php">(Oddly Specific) Q and A</a>
  </li>
</nav>

  
      <div class="container-fluid content">
      <div class="row" id="links">
      
        <ul class="list-unstyled" >
          <li> <code> 1</code>  <span style="color:darkgreen"> /* </span> </li>
          <li> <code> 2</code>  <span style="color:darkgreen"> /************************\ </span> </li> 
          <li> <code> 3</code>  <span style="color:darkgreen">  </span> </li>
          <li> <code> 4</code>  <span style="color:darkgreen">      Sam Alcosser</span> </li>
          <li> <code> 5</code>  <span style="color:darkgreen">Student Software Developer</span> </li>
          <li> <code> 6</code>  <span style="color:darkgreen">  </span>   </li>
          <li> <code> 7</code>  <span style="color:darkgreen">\************************/</span>   </li>
          <li> <code> 8</code>  <span style="color:darkgreen">*/ </span></li>
          <li> <code> 9</code></li>
          <li> <code>10</code></li>
          <li> <code>11</code> <span style="color:darkgreen">// Links to Relevant Resources</span></li>
          <li> <code>12</code> <span style="color:rgb(141, 220, 246)">console.</span><span style="color:lightgreen">log</span>(<span style="color:darkorange !important">"<a href="mailto:samalcosser@gmail.com">Email</a>"</span>);</li>
          <li> <code>13</code> <span style="color:rgb(141, 220, 246)">System.out.</span><span style="color:lightgreen">println</span>("<a href="Resume-Jul20.pdf">Resume</a>");</li>   
          <li> <code>14</code> <span style="color:lightgreen">std::</span><span style="color:rgb(141, 220, 246)">cout</span> <span style="color: lightgreen"><< </span><span style="color:darkorange !important">"<a href="https://www.linkedin.com/in/samuel-alcosser-9212b3181/">LinkedIn</a>"</span><span style="color:lightgreen"> << std::</span><span style="color:lightyellow">endl;</span></li>
          <li> <code>15</code> <span style="color:rgb(43, 113, 226)">print</span>(<span style="color:darkorange">"<a href="https://github.com/salcosser">GitHub</a>"</span><span id="last">)</span></li>

            </ul> 
        
          
      </div>