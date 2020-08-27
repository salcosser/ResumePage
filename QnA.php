<?php require("header.php");?>









<div class="jumbotron">

<div class="row" >
  <div class="col-lg-12 text-center">
  <h3 class="display-3" style="color:salmon">(Not So) Frequently Asked Questions</h3>
  <h4 class="display-4">Click on the questions to reveal the answers</h4>
  </div>


</div>

</div>












<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body cb" onclick="revealQuestion(0)" >
            <p class="font-italic question" >Q: How did you get into programming?</p>
            <p class=" answer">A: There are many of stories about kids who grow up programming, some even learning C++ before they even get to high school, but that is not my experience. To be honest, the first time I had experience writing code was anything but a lightbulb moment for me. In high school, I participated in a coding bootcamp organized by the student chapter of the Society for Industrial and Applied Mathematics (SIAM) at Columbia University. Between the rest of my friends who also attended and me, I was the least competent. At that point, I could not understand the relationship between the code and the machine. The next time I tried programming was when I built the website for my rock climbing team two years later. After putting in the hours, figuring out solutions to technical problems like connecting local database to a website with PHP without any real guidance, I was hooked.

</p>
</div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body cb" onclick="revealQuestion(1)">
            <p class="font-italic question">Q: If you were to relate the process of software development to any other process, what would it be?</p>
            <p class=" answer">A: Rock climbing. At their peaks, both could easily be described as a "Flow State Activity". At their worst, they're enough to make you question not only your own capabilities, but also your own sanity. The difference is that someone pays you to go through the development process and build a product, but  with climbing you pay a monthly membership to continually push yourself to your limits just for the enjoyment of doing so. This analogy is much more relevant than just the shared flow state. Much like how an experienced rock climber has a love hate relationship with people telling them how to complete their problem climb, I feel much more satisfaction figuring out how to debug an issue rather than just copying and pasting from Stack Overflow. One could even go as far as to say that being limited by strength but not technique when it comes to a climb could relate to how a person could know how to build an application but doesn’t have the motivation "muscle" to actually go through with building it.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body ca" onclick="revealQuestion(2)">
            <p class="font-italic question" >Q: What are you up to now?</p>
            <p class=" answer">
A: When I'm not at college, I am constantly looking for ways to better myself in this field. Whether that's little things like keeping up with latest trends in computing technology, diving into a side project, or attempting to learn a new language, I'm always looking for ways to get better. At the very least, I try to keep my mind moving. During the school year, I am studying at Marist College and I am on track to graduate in the Spring of 2022. I am pursuing a BS in Computer Science with a concentration in Software Development, with minors in IT and Cybersecurity. I also have plans to pursue a MS in Software Development through a five-year master program at my school. Other than academics, I also work as a software developer with the Marist CCAC group's agile development team. This team is assigned regular semester long work contracts with an accounting company named Collective Strategies. The experience I'm gaining from working with this group goes far beyond what I get from just writing code for a class or a side project. With this job, I am getting experience talking to the client on a regular basis, implementing new features, meeting deadlines, and being there if anything goes awry. The main work that I have done for the project is helping to build out the Check Request Tool API and updating our API to be able to use segments, or specific parts of an accounting document.</p>
  </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body cb" onclick="revealQuestion(3)">
            <p class="font-italic question" >Q: What is the quote about at the beginning of the site?</p>
            <p class=" answer">A: Right when you arrive at this site, you are greeted with the quote "No problem can be solved from the same level of consciousness that created it.". The first time I read this quote, I saw how it applied to so many parts of my life, although for our purposes, the context of software development. In my opinion, this quote fits perfectly with the process of debugging code. If the developer has taken the time to make sure that the issue is not a syntax error, an issue with the scope of a function call, or something of that nature, it's best to step away and rethink the issue. If the problem could be solved by the same level of consciousness of the person who wrote the code, and assuming this developer did an adequate job then there wouldn't be the problem in the first place. This does omit the possibility though that the person could not have the technical skill to build that component of the codebase, in which case it would be the fault of someone else. The root of what I am attempting to convey is that as long as the issue is not a lack of technical skill, it is probably best to take some time away from staring at the code and possibly rethink the process. </p>
          </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card col-12">
        <div class="card-body">
            <h4 class="display-4 text-center">About This Site</h4>
            <p class="text-center">This site was built using the Bootstrap 4 CSS and JavaScript Framework. a software called Prism is used to colorize the code snippets on each of the project pages. </p>
</div>
</div>
<?php require("footer.php");?>

  </body>
</html>
