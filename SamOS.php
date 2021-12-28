<?php require("header.php"); ?>



<div class="jumbotron">

    <div class="row">
        <div class="col-lg-8">
            <h3 class="display-3" style="color:salmon">SamOS</h3>
            <h4 class="display-4">Browser Based OS Built On TSOS</h4>
        </div>

        <div class="col-lg-4">
            <ul>
                <li>
                    <span> > Languages used: TypeScript, HTML, CSS
                </li>
                <li>
                    <span> > Frameworks and other bits used: TSOS</span>
                </li>



                <li>
                    <span> > <a href="https://github.com/salcosser/SamOS">Github Website Link</a></span>
                </li>
                <li>
                    <span> > <code>git clone https://github.com/salcosser/SamOS.git</code></span>
                </li>
                <li>
                    <p><a href="https://www.labouseur.com/commondocs/operating-systems/SamOS/index.html">Demo Hosted on Dr. Alan Labouseur's website</a></p>
                </li>


            </ul>
        </div>
    </div>

</div>
<!--
          "Don't feel as if the key to successful computing is
          only in your hands. What's in your hands, I think and
          hope, is intelligence: the ability to see the machine as
          more than when you were first led up to it, that you can
          make it more."
          —Alan J. Perlis (April 1, 1922 — February 7, 1990)
-->
<div class="row cb">





    <div class="col-md-4 screenshot"><img src="img/screen.png" class="img"></div>
    <div class="col-md-8">

        <p class="project-copy">

            &nbsp SamOS is an operating system built in Typescript without any additional packages or tools. No Node.js, no Django on the back end, just pure trans-compiled JavaScript. This project was the backbone of my Operating Systems course I took at Marist College. The project began by building off of a very barebones browser operating system called TSOS. TSOS simply had a terminal in which the user could type commands that were all similar to echo. The OS was so barebones that the terminal even lacked the ability to scroll when the text reached the bottom of the console window. Over the course of the semester, we slowly built our operating systems piece by piece.
    </div>
</div>

<div style="height:50px"></div>
<div class="row cb">

    <div class="col-md-4 screenshot"><img src="img/file.png" class="img"></div>
    <div class="col-md-8">
        <p class="project-copy">
            &nbspDespite this being part of coursework, we were not given any real guidance on how to build our systems. the only real instruction given for completing the milestone projects, aside from our given list of requirements for each project, was the theoretical and conceptual content taught to us in class. It was up to us to figure out how to implement features like hardware interrupts, memory swapping, and non-preemptive priority scheduling. This was a great experience to have, as many times up until this point in college we have been given some general instruction on how to complete the tasks assigned to us. This was a welcome change for me as it allowed me to be as creative as I wanted in my process of implementing these abstract concepts into my very real operating system.</p>
    </div>

</div>
<div style="height:50px"></div>
<div class="row ca">
    <div class="col-md-4 screenshot"><img src="img/disk.png" class="img"></div>
    <div class="col-md-8">
        <p class="project-copy">

            &nbspThis project was also exciting to me because I have always wanted to expand my understanding of the inner workings of computers. Ever since I was taking apart routers in my high school computer technology class I have always dreamed of having at least some idea of every level of a computer. From the traces on the motherboard to the code that is written for programs. This project, and this class for that matter, have been exciting as we had a chance to not only build out our operating systems, but to also build a truly virtual computer. This computer was meant to model a 6502 based pc. We wrote code that would mimic a subset of its op codes, its memory accessor and memory manager, and other components of a real computer. Overall, this project gave me great perspective on computing technology. My work was also appreciated by my professor, as he has since planned to use my operating system as one of his example projects to show his next class.</p>

    </div>

</div>
<div class="col-12 text-center cs-button-container">
    <button class=" btn " onclick="showCode()">Give me a taste of the code! (double-click)</button>
</div>
<div class="codeSnippet" id="csc">
    <div class="card">
        <div class="card-header">
            <h4> This is the logic used by preemptive priorty scheduling in my operating system. the top function, priority(), is called every clock pulse that the cpu is executing code. If this main function decides it is time to load a new process, it calls priSync(), which finds the next highest priority, runnable process, and starts the context switch. Also, it ensures that the new process is actually in memory and not swapped to disk. If it is swapped to disk, it pulls it back into memory first. </h4>
        </div>
        <div class="card-body">

            <pre><code class="language-typescript">
            public priority(){ // priority scheduling

            if(this.runningPID == -1){
                this.priSync(); // call switcher

            
                }else{
                    if(this.pendingSwitch){
                    
                        this.priSync();
                        this.pendingSwitch = false;
                    }else if(this.runningPID == 0){

                    }
                }
            
            
            
            }




            public priSync(){
            for(let i = 0;i&lt;this.priArr.length;i++){
                let pc = this.priArr[i];
                if(pc.pri != Number.POSITIVE_INFINITY){ // find something that isnt terminated
                    let tProc = this.readyQueue.dequeue();
                    if(tProc.pid == pc.pri){ // if we found the right proc at the first index
                        if(tProc.state ==READY){
                            let nProcLoc = this.pcbLocSet.get(tProc.pid);
                            let triedSwap = this.ensureInMemory(tProc); // ensure it is in memory before context switching to it
                            _Dispatcher.contextSwitch(tProc);
                            _Scheduler.pendingSwitch = false;
                            return;
                        }

                    }else{
                        this.readyQueue.enqueue(tProc);
                        let found = false;
                        let pCount = 1;
                        while(!found){ // iterate over the readyQueue until you get to a good candidate
                            tProc = this.readyQueue.dequeue();
                            if(tProc.pid == pc.pid &amp;&amp; tProc.state == READY){
                                let triedSwap = this.ensureInMemory(tProc); // ensure it is in memory before context switching to it
                                _Dispatcher.contextSwitch(tProc);
                                _Scheduler.pendingSwitch = false;
                                return;
                            }else if(pCount &gt;= this.readyQueue.getSize()+1){
                                this.readyQueue.enqueue(tProc);
                            
                                break;
                            }else{
                                this.readyQueue.enqueue(tProc);
                                pCount++;
                            }
                        }
                    }


                }
            }
            _CPU.isExecuting = false;
            _KernelInterruptQueue.enqueue(new Interrupt(FINISHED_PROC_QUEUE, [_Scheduler.runningPID]));
            }
</code></pre>
        </div>




    </div>
</div>
</div>






<?php require("footer.php"); ?>
</body>

</html>