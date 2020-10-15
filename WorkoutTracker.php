<?php require("header.php");?>



<div class="jumbotron">

<div class="row">
  <div class="col-lg-8">
  <h3 class="display-3"style="color:salmon">Workout Tracker</h3>
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

&nbsp The project featured here was my final project for my Software Development I class. The goal was to create a workout tracker for myself that kept record of the workouts I complete, as well as building sinple metrics features. Due to the amount of data that I would want to store in a non-volitile way, I knew that I would have to use a database. Before this, my only experience with databases was building out the forum for the <a href="teamrcf.php">teamRCF website</a>. This site uses php to connect to a database. I frequently met with my professor for guidance throughout the process, as working with databases in Java was something I had not done prior. He instructed me to use Hibernate. </p>
 </p>

 </div>
</div>
<div style="height:50px"></div>
<div class="row ca" >
<div class="col-md-4 screenshot" ><img src="img/homepage.PNG" class="img"></div>
 <div class="col-md-8">
<p class="project-copy">
&nbsp Hibernate is designed to make the connection between Java and SQL more fluid. Without it, one would have to use JDBC, an archaic method which involves writing out every SQL command before sending it. That is not to say that Hibernate makes it easy. Although there was a lot to learn about setting up the mapping classes, Hibernate does make it much easier to work with once everything is set up. I ended up also using MySQL Workbench in order to keep track of the database tables, which made it very simple. </p>
</div>

</div>
<div style="height:50px"></div>
<div class="row cb" >

<div class="col-md-4 screenshot" ><img src="img/metrics.PNG" class="img"></div>
<div class="col-md-8">
<p class="project-copy">
&nbsp Although this program was submitted as a final project for my Software Development I class, I am planning to roll out an update that would let users calculate their max weight for each number of reps. The main function is workout tracking by exercise with weight, reps, and sets. Other functionalities include: injury tracking, the ability to view basic metrics including the maximum weight you have used for each exercise. Some side functionality is the ability to have multiple users.
</p>
</div>

  </div>

  <div class="col-12 text-center cs-button-container">
    <button class=" btn "  onclick="showCode()">Give me a taste of the code! (double-click)</button>
  </div>
  <div class="codeSnippet" id="csc">
<div class="card">
<div class="card-header">
<h4> This code snippet shows examples of both using the hibernate functionality to pull data into Java and immediately use it as a set of objects. Also this snippet is taken from the metrics page of the tracker, where the user can see different stats on the workouts that they have done in the past.</h4>
</div>
<div class="card-body">

<pre><code class="language-java">
//create session
Session sessionWO = factoryWO.getCurrentSession();
sessionWO.beginTransaction();
List&#x3C;exercises&#x3E; exList = sessionE.createQuery(&#x22;from exercises&#x22;).getResultList(); //resources
List&#x3C;Workout&#x3E; wOId = sessionWO.createQuery(&#x22;from Workout w where w.userId = &#x22; + cUser.getId()).getResultList();
List&#x3C;exerciseDone&#x3E; eDones = new ArrayList&#x3C;&#x3E;();
for(int b = 0;b&#x3C;wOId.size();b++) {
	List&#x3C;exerciseDone&#x3E; eDonesW = sessionED.createQuery(&#x22;from exerciseDone e where e.wO.workoutid = &#x22; +wOId.get(b).getWorkoutid()).getResultList();
	for(int a = 0;a&#x3C;eDonesW.size(); a++) {
		eDones.add(eDonesW.get(a));
	}
}
//resources
ArrayList&#x3C;exerciseDone&#x3E; maxesList = new ArrayList&#x3C;&#x3E;(); //holding the highest rep count of each exercise
ArrayList&#x3C;exerciseDone&#x3E; currEx = new ArrayList&#x3C;&#x3E;(); // holding the distinct exercises as they are compared
for(int i = 0; i&#x3C;exList.size();i++) { //going through each exercise
	int currE = exList.get(i).getIdExercises(); //getting the PK to compare to
	for(int j = 0;j&#x3C;eDones.size();j++) { //going through each of the exercises done
		if(eDones.get(j).getExerciseId() == currE) {
			currEx.add(eDones.get(j));
			continue;
		}
		if(currEx.size() &#x3E;= 1) {
			int[] mReps = new int[currEx.size()]; //array to hold the total reps of each exercise done
			for(int k = 0; k&#x3C;currEx.size();k++) {
				mReps[k] = ( (currEx.get(k).getReps())*(currEx.get(k).getSets() )); //computing
			}
			int bInmReps = indexOfMax(mReps); //getting the index of the exercise with the most reps out of the list
			System.out.println(mReps[bInmReps]);
			System.out.println(&#x22;reps&#x22;+ currEx.get(bInmReps).getReps());
			maxesList.add(currEx.get(indexOfMax(mReps)));
		}
		else {
			continue;
		}
		currEx.clear();
	}
}
</code></pre>
</div>




  </div>
  </div>
</div>






<?php require("footer.php");?>
</body>
</html>
