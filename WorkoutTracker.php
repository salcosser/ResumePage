<?php require("header.php");?>

      

<div class="jumbotron">

<div class="row">
  <div class="col-lg-8">
  <h3 class="display-3">Workout Tracker</h3>
  <h4 class="display-4">Functional Product, and First "Big" Project</h4>
  </div>

        <div class="col-lg-4">
        <ul>
      <li>
        <span> > Languages used: Java, SQL, HQL, and a bit of XML
      </li>
      <li>
        <span> > Frameworks and other bits used: Hibernate ORM, MySQL, and Swing </span>
      </li>



      <li>
        <span> > <a href="https://github.com/salcosser/Workout-Tracker">Github Website Link</a></span>
      </li>
      <li>
        <span> >  <code>git clone https://github.com/salcosser/Workout-Tracker.git</code></span>
      </li>

      </ul>
      </div>
</div>

</div>
<div class="row cb" >





 <div class="col-md-4 screenshot" ><img src="img/tracker.PNG" class="img"></div>
 <div class="col-md-8">

  <p class="project-copy">

&nbsp The project featured here was my final project for my software development 1 class. The goal was to create a workout tracker for myself that would let me keep track of the workouts that I complete, as well as doing some minor metrics work. Because of the fact that there was going to be a fair amount of data that I would want to store in a non-volitile way, I knew that I would have to use a database. Before this, my only experience with databases was building out the forum for the <a href="teamrcf.php">teamRCF website</a>, and that was using php to connect. I also met with my professor for guidance, as doing database work in Java was a whole new ball game for me. He instructed me to use Hibernate. </p>
 </p>

 </div>
</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/homepage.PNG" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">
This was a software designed to make the connection between Java and SQL more fluid. Without it, one would have to use JDBC, an archaic method involving writing out every SQL command before sending it. That is not to say that Hibernate makes it easy, There is a lot to learn about setting up the classes so they can communicate the data accurately to the database, although Hibernate does make it much cleaner to work with once everything is set up. I ended up also using MySQL Workbench in order to keep track of the databases, which made it very simple. </p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb" >

<div class="col-md-4 screenshot" ><img src="img/metrics.PNG" class="img"></div>
<div class="col-md-8">
<p class="project-copy">
This project is still a work in progress, as I am planning to roll out an update that would let users calculate their max weight for each number of reps, from within the application. The main function is workout tracking by exercise with weight, reps, and sets. Other functionality includes injury tracking, and the ability to look at basic metrics including your hardest you've hit each exercise, and seeing the maximum weight you have ever used for each exercise. Some side functionality is the ability to have multiple users. 
</p>
</div>

  </div>   

  <div class="col-12 text-center cs-button-container">
    <button class=" btn btn-info"  onclick="showCode()">Give me a taste of the code! (double-click)</button>
  </div>
  <div class="codeSnippet" id="csc">
<div class="card">
<div class="card-header">
<h4> This code snippet shows examples of both using the hibernate functionality to pull data into Java and immediately use it as a set of objects. Also this snippet is taken from the metrics page of the tracker, where the user can see different stats on the workouts that they have done in the past.</h4>
</div>
<div class="card-body">
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//create session</span>
Session sessionWO <span style="color: #333333">=</span> factoryWO<span style="color: #333333">.</span><span style="color: #0000CC">getCurrentSession</span><span style="color: #333333">();</span>
sessionWO<span style="color: #333333">.</span><span style="color: #0000CC">beginTransaction</span><span style="color: #333333">();</span>
List<span style="color: #333333">&lt;</span>exercises<span style="color: #333333">&gt;</span> exList <span style="color: #333333">=</span> sessionE<span style="color: #333333">.</span><span style="color: #0000CC">createQuery</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;from exercises&quot;</span><span style="color: #333333">).</span><span style="color: #0000CC">getResultList</span><span style="color: #333333">();</span> <span style="color: #888888">//resources</span>
List<span style="color: #333333">&lt;</span>Workout<span style="color: #333333">&gt;</span> wOId <span style="color: #333333">=</span> sessionWO<span style="color: #333333">.</span><span style="color: #0000CC">createQuery</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;from Workout w where w.userId = &quot;</span> <span style="color: #333333">+</span> cUser<span style="color: #333333">.</span><span style="color: #0000CC">getId</span><span style="color: #333333">()).</span><span style="color: #0000CC">getResultList</span><span style="color: #333333">();</span>
List<span style="color: #333333">&lt;</span>exerciseDone<span style="color: #333333">&gt;</span> eDones <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> ArrayList<span style="color: #333333">&lt;&gt;();</span>
<span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> b <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span>b<span style="color: #333333">&lt;</span>wOId<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">();</span>b<span style="color: #333333">++)</span> <span style="color: #333333">{</span>
List<span style="color: #333333">&lt;</span>exerciseDone<span style="color: #333333">&gt;</span> eDonesW <span style="color: #333333">=</span> sessionED<span style="color: #333333">.</span><span style="color: #0000CC">createQuery</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;from exerciseDone e where e.wO.workoutid = &quot;</span> <span style="color: #333333">+</span>wOId<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>b<span style="color: #333333">).</span><span style="color: #0000CC">getWorkoutid</span><span style="color: #333333">()).</span><span style="color: #0000CC">getResultList</span><span style="color: #333333">();</span>
<span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> a <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span>a<span style="color: #333333">&lt;</span>eDonesW<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">();</span> a<span style="color: #333333">++)</span> <span style="color: #333333">{</span>
eDones<span style="color: #333333">.</span><span style="color: #0000CC">add</span><span style="color: #333333">(</span>eDonesW<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>a<span style="color: #333333">));</span>
<span style="color: #333333">}</span>
<span style="color: #333333">}</span>
<span style="color: #888888">//resources</span>
ArrayList<span style="color: #333333">&lt;</span>exerciseDone<span style="color: #333333">&gt;</span> maxesList <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> ArrayList<span style="color: #333333">&lt;&gt;();</span> <span style="color: #888888">//holding the highest rep count of each exercise</span>
ArrayList<span style="color: #333333">&lt;</span>exerciseDone<span style="color: #333333">&gt;</span> currEx <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> ArrayList<span style="color: #333333">&lt;&gt;();</span> <span style="color: #888888">// holding the distinct exercises as they are compared</span>
<span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span> i<span style="color: #333333">&lt;</span>exList<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">();</span>i<span style="color: #333333">++)</span> <span style="color: #333333">{</span> <span style="color: #888888">//going through each exercise</span>
<span style="color: #333399; font-weight: bold">int</span> currE <span style="color: #333333">=</span> exList<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>i<span style="color: #333333">).</span><span style="color: #0000CC">getIdExercises</span><span style="color: #333333">();</span> <span style="color: #888888">//getting the PK to compare to </span>
<span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span>j<span style="color: #333333">&lt;</span>eDones<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">();</span>j<span style="color: #333333">++)</span> <span style="color: #333333">{</span> <span style="color: #888888">//going through each of the exercises done</span>
<span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>eDones<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>j<span style="color: #333333">).</span><span style="color: #0000CC">getExerciseId</span><span style="color: #333333">()</span> <span style="color: #333333">==</span> currE<span style="color: #333333">)</span> <span style="color: #333333">{</span>
currEx<span style="color: #333333">.</span><span style="color: #0000CC">add</span><span style="color: #333333">(</span>eDones<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>j<span style="color: #333333">));</span>
<span style="color: #008800; font-weight: bold">continue</span><span style="color: #333333">;</span>
<span style="color: #333333">}</span>
<span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>currEx<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">()</span> <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
<span style="color: #333399; font-weight: bold">int</span><span style="color: #333333">[]</span> mReps <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> <span style="color: #333399; font-weight: bold">int</span><span style="color: #333333">[</span>currEx<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">()];</span> <span style="color: #888888">//array to hold the total reps of each exercise done</span>
<span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> k <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span> k<span style="color: #333333">&lt;</span>currEx<span style="color: #333333">.</span><span style="color: #0000CC">size</span><span style="color: #333333">();</span>k<span style="color: #333333">++)</span> <span style="color: #333333">{</span>
mReps<span style="color: #333333">[</span>k<span style="color: #333333">]</span> <span style="color: #333333">=</span> <span style="color: #333333">(</span> <span style="color: #333333">(</span>currEx<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>k<span style="color: #333333">).</span><span style="color: #0000CC">getReps</span><span style="color: #333333">())*(</span>currEx<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>k<span style="color: #333333">).</span><span style="color: #0000CC">getSets</span><span style="color: #333333">()</span> <span style="color: #333333">));</span> <span style="color: #888888">//computing</span>
<span style="color: #333333">}</span>
<span style="color: #333399; font-weight: bold">int</span> bInmReps <span style="color: #333333">=</span> indexOfMax<span style="color: #333333">(</span>mReps<span style="color: #333333">);</span> <span style="color: #888888">//getting the index of the exercise with the most reps out of the list</span>
System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>mReps<span style="color: #333333">[</span>bInmReps<span style="color: #333333">]);</span>
System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;reps&quot;</span><span style="color: #333333">+</span> currEx<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>bInmReps<span style="color: #333333">).</span><span style="color: #0000CC">getReps</span><span style="color: #333333">());</span>
maxesList<span style="color: #333333">.</span><span style="color: #0000CC">add</span><span style="color: #333333">(</span>currEx<span style="color: #333333">.</span><span style="color: #0000CC">get</span><span style="color: #333333">(</span>indexOfMax<span style="color: #333333">(</span>mReps<span style="color: #333333">)));</span>
<span style="color: #333333">}</span>
<span style="color: #008800; font-weight: bold">else</span> <span style="color: #333333">{</span>
<span style="color: #008800; font-weight: bold">continue</span><span style="color: #333333">;</span>
<span style="color: #333333">}</span>
currEx<span style="color: #333333">.</span><span style="color: #0000CC">clear</span><span style="color: #333333">();</span>
<span style="color: #333333">}</span>
<span style="color: #333333">}</span> 
  
</pre></div>



  
  </div>
  </div>
</div>

      
     
  


<?php require("footer.php");?>
</body>
</html>