<?php require("header.php");?>

  
      <div class="container-fluid">
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
      

<div class="jumbotron">

<div class="row">
  <div class="col-8">
  <h3 class="display-3">Team RCF Website (Not Live)</h3>
  <h4 class="display-4">From Nothing, to Building A Full Stack Website</h4>
  </div>

        <div class="col-4">
        <ul>
      <li>
        <span> > Languages used: HTML, CSS, JavaScript, SQL, and PHP
      </li>
      <li>
        <span> > Frameworks and other bits used: XAMPP (Apache, MySQL, and PHPMyAdmin were used from this program)</span>
      </li>



      <li>
        <span> > <a href="https://github.com/salcosser/TeamRCF">Github Website Link</a></span>
      </li>
      <li>
        <span> >  <code>git clone https://github.com/salcosser/TeamRCF.git</code></span>
      </li>

      </ul>
      </div>
</div>

</div>
<div class="row cb" >




<div class="col-8">

  <p class="project-copy">

&nbsp To begin, I am aware that it would be a lot better to have a hyperlink to the page, although, it is no longer active. The reason being the fees to keep the site active was really starting to add up. Although, all of the source code is on the GitHub link. This project was the hardest thing I have ever done at the time. I was just getting into my senior year of high school and I wanted to start programming. The obvious place to start was a website.
 </p>

 </div>
 <div class="col-4 screenshot" ><img src="img/homepage 1.PNG" class="img"></div>
</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-4 screenshot" ><img src="img/Contact Page.PNG" class="img"></div>
 <div class="col-8">
<p class="project-copy">
      So, I decided to take it upon myself to make a website for my rock climbing team, hence the name teamrcf. Through this projects I got my first experience of the problem solving I would have to do later on down the line as a programmer. I taught myself HTML and CSS through books that I bought. I Then used online resources, mainly w3schools.com. This website helped me with all that I would need to know to get started, even with CSS. I then obviously turned to stackoverflow for my JavaScript questions. I would search for hours looking for solutions, and I felt so accomplished when I would succeed. 
</p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb" >


<div class="col-8">
<p class="project-copy">
Once the frontend was done, I wanted to tackle a bigger challenge. Making a custom built forum for the climbing team. Complete with different permission levels for team members, parents, and coaches. This meant getting into the territory of back end development. Here I learned how to use PHP and SQL to keep up the back end of websites. It was a great experience, being able to be the graphic designer, the front end developer, and the back end developer. It is true that this page was my first attempt at programming in general, and in some places in the source code this is very apparent, but to me this didn't matter at the time. All that mattered was that I started at nothing, and ended with a working product. 
</p>
</div>
<div class="col-4 screenshot" ><img src="img/Team Forum Login.PNG" class="img"></div>
  </div>   

  <div class="col-12 text-center cs-button-container">
    <button class=" btn btn-info"  onclick="showCode()">Give me a taste of the code! (double-click)</button>
  </div>
  <div class="codeSnippet" id="csc">
<div class="card">
<div class="card-header">
<h4> This section of code describes part of the validation page on the user creation part of the forum. This gets used when the password and confirm password match, use capitals and lower case, and use numbers.</h4>
</div>
<div class="card-body">
  <pre>
  <code>
  if ($resp-&gt;is_valid){
$full_name = mysqli_escape_string($connection, $full_name);
$username = mysqli_escape_string($connection, $username);
$email = mysqli_escape_string($connection, $email);
$passwordArray = password_encrypt($password);
$hashyHash = $passwordArray[0];
$saltySalt = $passwordArray[1];
$userCreateQuery = "INSERT INTO users ( fullName, username, email, passypass, salt ) VALUES ('{$full_name}', '{$username}', '{$email}', '{$hashyHash}', '{$saltySalt}');";
$setUser = mysqli_query($connection, $userCreateQuery);
$userErrorCheck="SELECT username FROM users WHERE username = '{$username}'";
$userErrorResult= mysqli_query($connection, $userCheckQuery);
$userErrorRows = mysqli_num_rows($userErrorResult);
if($userErrorRows === 0){
// this catches the rare case of an insert statement to SQL not functioning properly
$message = "An error occured, please try again.";
$full_name = urlencode($full_name);
$email = urlencode($email);
$username =urlencode($username);
$submit = urlencode($submit);
$url = "http://localhost/teamrcf/php/forum/CreateAccount.php?s={$submit}&amp;m={$message}&amp;fn={$full_name}&amp;e={$email}&amp;u={$username}";
mysqli_free_result($userCheckResult);
mysqli_free_result($userErrorResult);
mysqli_close($connection);
redirect_to($url);
} 
  </code>


  </pre>
  </div>
  </div>
</div>

      
     
  

<footer>
<div class="row ft-head"><div class="col-12"><h4 class="text-center"> Sam Alcosser's Online Portfolio </h4></div></div>
<div class="row info-pt">
  <div class="col-6">
    <p>Currently studying Computer Science at Marist College in Poughkeepsie, NY. Open to inquries about internships and entry level development jobs.</p>
  </div>
  <div class="col-6" >
    <span> Personal Email: <a href="mailto:samalcosser@gmail.com">samalcosser@gmail.com</a></span><br />
    <span> School Emali: <a href="mailto:samuel.alcosser1@marist.edu">samuel.alcosser1@marist.edu</a></span><br />
  Fairfield, CT

</footer>
</body>
</html>