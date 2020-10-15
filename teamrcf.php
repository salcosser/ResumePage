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

&nbsp The main focus of this project was to teach myself how to write code, and hopefully how to write code that would result in a finished product. This project was done within the framework of an independent study at my high school during my senior year. In my opinion, the best place to start with creating a usable product with code was to build a website. I decided that the optimal topic for this site would be my youth rock climbing team. Once the topic was decided I began chipping away at the most difficult project I had ever taken on. At this point, I should also mention that the website is no longer live due to privacy reasons as well as the financial cost to host it.</p>
 </div>

</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/Contact Page.PNG" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">
&nbsp The main benefits of this project for me came in three parts: technical skill, system design and UI/UX design, and confidence in my technical abilities. The site is not very impressive when reviewed for what it is, although to me this site was much more than just the final product. To me, this site was the way in which I was able to gain fundamental knowledge of how to think like a designer, how to think like a programmer, and how to think like the user. This new way of thinking I discovered is essential to how a developer works. Without the ability to see the product from different perspectives, the end result will not be able to reach its full potential.  </p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb" >

<div class="col-md-4 screenshot" ><img src="img/Team Forum Login.PNG" class="img"></div>
<div class="col-md-8">
<p class="project-copy"> &nbspOther than these softer skills, I also learned about front end and back end languages. For the front end of the site, I learned HTML and CSS. I toyed with using JavaScript, although I never pursued the language much at that point. I also never looked into any frontend frameworks at this time, mostly because I was not aware that they existed. On the backend, I learned how to use PHP and SQL well enough to build out more complex functionality such as CAPTCHA verification on sign in, as well as a custom-built forum. There was a fair amount of hand holding from the likes of Stack Overflow and w3schools, but in the end I was able to complete a project I am still proud of to this day. </p>
 </div>

  </div>

  <div class="col-12 text-center cs-button-container">
    <button class=" btn "  onclick="showCode()">Give me a taste of the code! (double-click)</button>
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
