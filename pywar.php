<?php require("header.php");?>

  


<div class="jumbotron">

<div class="row">
  <div class="col-lg-8">
  <h3 class="display-3">pyWar</h3>
  <h4 class="display-4">First Non-Guided Programming Project</h4>
  </div>

        <div class="col-lg-4">
        <ul>
      <li>
        <span> > Languages used: Python
      </li>
      <li>
        <span> > Frameworks and other bits used: Graphics.py </span>
      </li>



      <li>
        <span> > <a href="https://github.com/salcosser/WarPython">Github Website Link</a></span>
      </li>
      <li>
        <span> >  <code>git clone https://github.com/salcosser/WarPython.git</code></span>
      </li>

      </ul>
      </div>
</div>

</div>
<div class="row cb" >


<div class="col-md-4 screenshot" ><img src="img/table.PNG" class="img"></div>

<div class="col-md-8">

  <p class="project-copy">

&nbsp   This project was really about pushing the limits of what I could do with pure Python, aside from the graphics package. This was one of my first full projects, and the first program that I ever made using Python on my own. This project, which was my final project for Intro to Programming, plays the card game War against itself until one "player" either runs out of cards or they play 100 hands. At that point, the "player with the greatest amount of cards wins. This limit was put on as during testing, there were some matches that would last over 2000 hands.  </p>

 </div>
 
</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/console.PNG" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">
The code itself is quite simple, although I loved making it. This program was my first introduction into object oriented programming, and it shows in the code. I made my own classes for the decks of cards and for the games. It took me a while to figure out how to make a deck of cards out of two arrays, but my method of putting each card into a string and parsing it out afterwards proved useful. The algorithm for the game was more complicated. </p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb " >
<div class="col-md-4 screenshot text-center" ><img src="img/brackOnly.png" style="height:300px;width:300px;" class="img"></div>

<div class="col-md-8">
<p class="project-copy">

In the end, The algorithm could easily be mapped out with a decision tree, but at the time I was just going off of what I thought would work. I actually developed my own way of interpreting it. Also, as a side note, the game will only go into double war, after that, the hand is split evenly and re-dealt, making sure to shuffle the stack prior to avoid an infinite loop. The only user input is how many times the deck is shuffled, as the computer plays against itself. The implementation of the graphics module was used to make a simple poker table, to simulate the play area.
</p>
</div>

  </div>   

  <div class="col-12 text-center cs-button-container">
    <button class=" btn btn-info"  onclick="showCode()">Give me a taste of the code! (double-click)</button>
  </div>
  <div class="codeSnippet" id="csc">
<div class="card">
<div class="card-header">
<h4>These lines of code are what happens in the game of war if there is a tie, or war, and after war the first player has a higher card.</h4>
</div>
<div class="card-body">

<pre class="python" style="font-family:monospace;"><span style="color: #808080; font-style: italic;"># what happens if there is a tie?</span>
<span style="color: #ff7700;font-weight:bold;">else</span>:
<span style="color: #808080; font-style: italic;"># tie</span>
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;THIS MEANS WAR!!!&quot;</span><span style="color: black;">&#41;</span>
<span style="color: #808080; font-style: italic;"># tempstack is the name of a list which contains all cards on the table including both of the tied cards</span>
<span style="color: #808080; font-style: italic;"># and the other four which are dealt out between the two players</span>
<span style="color: #808080; font-style: italic;"># check that both players have enough cards to continue</span>
tempstack <span style="color: #66cc66;">=</span> <span style="color: black;">&#91;</span>p1card<span style="color: #66cc66;">,</span> p2card<span style="color: black;">&#93;</span>
<span style="color: #ff7700;font-weight:bold;">if</span> <span style="color: #008000;">len</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player2H</span><span style="color: black;">&#41;</span> <span style="color: #66cc66;">&lt;</span> <span style="color: #ff4500;">3</span>:
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;player 1 wins as player 2 is out of cards&quot;</span><span style="color: black;">&#41;</span>
games <span style="color: #66cc66;">=</span> <span style="color: #ff4500;">2501</span>
<span style="color: #ff7700;font-weight:bold;">elif</span> <span style="color: #008000;">len</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player1H</span><span style="color: black;">&#41;</span> <span style="color: #66cc66;">&lt;</span> <span style="color: #ff4500;">3</span>:
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;player 2 wins as player 1 is out of cards&quot;</span><span style="color: black;">&#41;</span>
games <span style="color: #66cc66;">=</span> <span style="color: #ff4500;">2501</span>
<span style="color: #ff7700;font-weight:bold;">else</span>:
<span style="color: #808080; font-style: italic;"># represents both players placing two cards face down</span>
tempstack.<span style="color: black;">append</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player1H</span>.<span style="color: black;">pop</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">0</span><span style="color: black;">&#41;</span><span style="color: black;">&#41;</span>
tempstack.<span style="color: black;">append</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player1H</span>.<span style="color: black;">pop</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">0</span><span style="color: black;">&#41;</span><span style="color: black;">&#41;</span>
tempstack.<span style="color: black;">append</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player2H</span>.<span style="color: black;">pop</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">0</span><span style="color: black;">&#41;</span><span style="color: black;">&#41;</span>
tempstack.<span style="color: black;">append</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player2H</span>.<span style="color: black;">pop</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">0</span><span style="color: black;">&#41;</span><span style="color: black;">&#41;</span>
<span style="color: #808080; font-style: italic;"># the commented line below is used for debugging purposes</span>
<span style="color: #808080; font-style: italic;"># print(&quot;tempstack length&quot;, len(tempstack))</span>
p1card <span style="color: #66cc66;">=</span> <span style="color: #008000;">self</span>.<span style="color: black;">player1H</span>.<span style="color: black;">pop</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">0</span><span style="color: black;">&#41;</span>
p2card <span style="color: #66cc66;">=</span> <span style="color: #008000;">self</span>.<span style="color: black;">player2H</span>.<span style="color: black;">pop</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">0</span><span style="color: black;">&#41;</span>
tempstack.<span style="color: black;">append</span><span style="color: black;">&#40;</span>p1card<span style="color: black;">&#41;</span>
tempstack.<span style="color: black;">append</span><span style="color: black;">&#40;</span>p2card<span style="color: black;">&#41;</span>
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;WAR&quot;</span><span style="color: black;">&#41;</span>
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;player 1 card:&quot;</span><span style="color: black;">&#41;</span>
p1card.<span style="color: black;">show</span><span style="color: black;">&#40;</span><span style="color: black;">&#41;</span>
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;player 2 card:&quot;</span><span style="color: black;">&#41;</span>
p2card.<span style="color: black;">show</span><span style="color: black;">&#40;</span><span style="color: black;">&#41;</span>
<span style="color: #808080; font-style: italic;"># checking yet again for a winner or a tie, if there is a winner, empty all of the tempstack</span>
<span style="color: #808080; font-style: italic;"># into that players deck</span>
<span style="color: #ff7700;font-weight:bold;">if</span> p1card.<span style="color: black;">getVal</span><span style="color: black;">&#40;</span><span style="color: black;">&#41;</span> <span style="color: #66cc66;">&gt;</span> p2card.<span style="color: black;">getVal</span><span style="color: black;">&#40;</span><span style="color: black;">&#41;</span>:
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">&quot;player 1 wins&quot;</span><span style="color: black;">&#41;</span>
<span style="color: #dc143c;">time</span>.<span style="color: black;">sleep</span><span style="color: black;">&#40;</span><span style="color: #ff4500;">.1</span><span style="color: black;">&#41;</span>
<span style="color: #ff7700;font-weight:bold;">for</span> card <span style="color: #ff7700;font-weight:bold;">in</span> tempstack:
<span style="color: #008000;">self</span>.<span style="color: black;">player1H</span>.<span style="color: black;">append</span><span style="color: black;">&#40;</span>card<span style="color: black;">&#41;</span>
tempstack <span style="color: #66cc66;">=</span> <span style="color: black;">&#91;</span><span style="color: black;">&#93;</span>
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #008000;">len</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player1H</span><span style="color: black;">&#41;</span><span style="color: black;">&#41;</span>
<span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #008000;">len</span><span style="color: black;">&#40;</span><span style="color: #008000;">self</span>.<span style="color: black;">player2H</span><span style="color: black;">&#41;</span><span style="color: black;">&#41;</span>
games <span style="color: #66cc66;">=</span> games + <span style="color: #ff4500;">1</span> </pre>
  </div>
  </div>
</div>

      
     
  

<?php require("footer.php");?>
</body>
</html>