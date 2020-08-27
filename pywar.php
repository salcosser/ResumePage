<?php require("header.php");?>




<div class="jumbotron">

<div class="row">
  <div class="col-lg-8">
  <h3 class="display-3" style="color:salmon">pyWar</h3>
  <h4 class="display-4" >First Non-Guided Programming Project</h4>
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

&nbsp    This project was my first logic-based programming project. This project, which was my final project for my Intro to Programming class, plays the card game War against itself. For the uninitiated, War is a simple card game in which both players play the top card in their stack, and the highest card wins and that player takes both cards. If both cards match, both players put down three cards and one face up to compete again, the winner gets both stacks. In the real version players play until one player runs out of cards, although in my version there is a limit on the number of matches at 100 matches. At this point, the player with the highest number of cards will win. </p>

 </div>

</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/console.PNG" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">
&nbspOne higher level concept that I used was the stack data structure. This enabled the functionality of the stacks of cards. The most difficult issue that I faced logically was the recursion issue of going into double and triple war. The only user input is how many times the deck is shuffled, as the computer plays against itself. The implementation of the graphics module was used to make a simple poker table, to simulate the play area.</p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb " >
<div class="col-md-4 screenshot text-center" ><img src="img/brackOnly.png" style="height:300px;width:300px;" class="img"></div>

<div class="col-md-8">
<p class="project-copy">

&nbsp The logic of the code itself is quite simple, although I loved making it. This program was my first introduction into object-oriented programming. I created my own classes for the decks of cards and for the games. After some time, I was able to figure out how to make a deck of cards out of two arrays, but my method of putting each card into a string and parsing it out afterwards proved useful. The algorithm for the game was more complicated. In the end, the algorithm could easily be mapped out with a decision tree, but at the time I was just going off of what I thought would work. 
</p>
</div>

  </div>

  <div class="col-12 text-center cs-button-container">
    <button class=" btn "  onclick="showCode()">Give me a taste of the code! (double-click)</button>
  </div>
  <div class="codeSnippet" id="csc">
<div class="card">
<div class="card-header">
<h4>These lines of code are what happens in the game of war if there is a tie, or war, and after war the first player has a higher card.</h4>
</div>
<div class="card-body">
<pre><code class="language-python">
# what happens if there is a tie?
else:
# tie
print(&#x22;THIS MEANS WAR!!!&#x22;)
# tempstack is the name of a list which contains all cards on the table including both of the tied cards
# and the other four which are dealt out between the two players
# check that both players have enough cards to continue
tempstack = [p1card, p2card]
if len(self.player2H) &#x3C; 3:
print(&#x22;player 1 wins as player 2 is out of cards&#x22;)
games = 2501
elif len(self.player1H) &#x3C; 3:
print(&#x22;player 2 wins as player 1 is out of cards&#x22;)
games = 2501
else:
# represents both players placing two cards face down
tempstack.append(self.player1H.pop(0))
tempstack.append(self.player1H.pop(0))
tempstack.append(self.player2H.pop(0))
tempstack.append(self.player2H.pop(0))
# the commented line below is used for debugging purposes
# print(&#x22;tempstack length&#x22;, len(tempstack))
p1card = self.player1H.pop(0)
p2card = self.player2H.pop(0)
tempstack.append(p1card)
tempstack.append(p2card)
print(&#x22;WAR&#x22;)
print(&#x22;player 1 card:&#x22;)
p1card.show()
print(&#x22;player 2 card:&#x22;)
p2card.show()
# checking yet again for a winner or a tie, if there is a winner, empty all of the tempstack
# into that players deck
if p1card.getVal() &#x3E; p2card.getVal():
print(&#x22;player 1 wins&#x22;)
time.sleep(.1)
for card in tempstack:
self.player1H.append(card)
tempstack = []
print(len(self.player1H))
print(len(self.player2H))
games = games + 1
</code></pre>
</div>
  </div>
</div>





<?php require("footer.php");?>
</body>
</html>
