<?php require("header.php");?>

  

      

<div class="jumbotron">

<div class="row">
  <div class="col-lg-8">
  <h3 class="display-3"style="color:salmon">Team RCF Website (Not Live)</h3>
  <h4 class="display-4">From Nothing, to Building A Full Stack Website</h4>
  </div>

        <div class="col-lg-4">
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



<div class="col-md-4 screenshot" ><img src="img/homepage 1.PNG" class="img"></div>
<div class="col-md-8">

  <p class="project-copy">

&nbsp To begin, I am aware that it would be much more elegant to have a hyperlink to the page, although, it is no longer active. The reason being the fees to keep the site active were starting to add up. Although, all of the source code is on the GitHub link. This project was the hardest thing I had ever done at the time. I was just getting into my senior year of high school and I wanted to start programming. The obvious place to start was a website. So, I decided to take it upon myself to make a website for my rock climbing team, hence the name teamrcf.  </p>

 </div>
 
</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/Contact Page.PNG" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">
Through this project I got my first experience of the type of problem solving I would have to do later on down the line as a programmer. I taught myself HTML and CSS through books that I bought. I Then used online resources, mainly w3schools.com. This website helped me with all that I would need to know to get started, even with CSS. I then obviously turned to Stack Overflow for my JavaScript questions. I would search for hours looking for solutions, and I felt so accomplished when I would succeed. </p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb" >

<div class="col-md-4 screenshot" ><img src="img/Team Forum Login.PNG" class="img"></div>
<div class="col-md-8">
<p class="project-copy">Once the frontend was done, I wanted to tackle a bigger challenge. Making a custom built forum for the climbing team. Complete with different permission levels for team members, parents, and coaches. This meant getting into the territory of backend development. Here I learned how to use PHP and SQL to keep up the backend of websites. It was a great experience being able to be the graphic designer, the frontend developer, and the backend developer. This was my first attempt at programming in general, and in some places in the source code this is very apparent. In the end, All that mattered was that I started at nothing, and ended with a working product. </p>
</div>

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

<pre><code class="language-php" style="font-size:2vmin !important; line-height:.8 !important">
if ($resp-&#x3E;is_valid){
$full_name = mysqli_escape_string($connection, $full_name);
$username = mysqli_escape_string($connection, $username);
$email = mysqli_escape_string($connection, $email);
$passwordArray = password_encrypt($password);
$hashyHash = $passwordArray[0];
$saltySalt = $passwordArray[1];
$userCreateQuery = &#x22;INSERT INTO users ( fullName, username, email, passypass, salt ) VALUES (&#x27;{$full_name}&#x27;, &#x27;{$username}&#x27;, &#x27;{$email}&#x27;, &#x27;{$hashyHash}&#x27;, &#x27;{$saltySalt}&#x27;);&#x22;;
$setUser = mysqli_query($connection, $userCreateQuery);
$userErrorCheck=&#x22;SELECT username FROM users WHERE username = &#x27;{$username}&#x27;&#x22;;
$userErrorResult= mysqli_query($connection, $userCheckQuery);
$userErrorRows = mysqli_num_rows($userErrorResult);
if($userErrorRows === 0){
// this catches the rare case of an insert statement to SQL not functioning properly
$message = &#x22;An error occured, please try again.&#x22;;
$full_name = urlencode($full_name);
$email = urlencode($email);
$username =urlencode($username);
$submit = urlencode($submit);
$url = &#x22;http://localhost/teamrcf/php/forum/CreateAccount.php?s={$submit}&#x26;m={$message}&#x26;fn={$full_name}&#x26;e={$email}&#x26;u={$username}&#x22;;
mysqli_free_result($userCheckResult);
mysqli_free_result($userErrorResult);
mysqli_close($connection);
redirect_to($url);
} 
</code></pre>
  </div>
  </div>
</div>

      
     
  


<?php require("footer.php");?>
</body>
</html>
