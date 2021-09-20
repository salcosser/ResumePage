<!DOCTYPE html>
<?php


if (session_id() == '' || !isset($_SESSION)) {
    session_start();
    $_SESSION['mode'] = "Dark";
}
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="prism.css">
    <script src="prism.js"></script>

</head>

<body onload="javascript:fade(document.getElementById('prologue')),sizing(),setMode()">

    <style>
        .row {
            margin-right: 0px;
            margin-left: 0px;
        }
    </style>
    <script>
        var prologue = document.getElementById('prologue');

        function turnOff() {
            document.getElementById("prologue").style.display = "none";
        }


        function fade(element) {

            if (screen.width >= 500) {

                setTimeout(function() {
                    var op = 1; // initial opacity
                    var timer = setInterval(function() {
                        if (op <= 0.08) {
                            clearInterval(timer);
                            element.style.display = 'none';
                        }
                        element.style.opacity = op;
                        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                        op -= op * 0.08;
                    }, 50);
                }, 4500);
            } else {
                document.getElementById('prologue').style.display = 'none';


            }

        }

        function breakBuffers() {
            var sw = screen.width;
            var buffers = document.getElementsByClassName("buffer");
            if (sw <= 600) {
                for (buffer of buffers) {
                    buffer.style.display = "none";
                }
            }
        }
    </script>
    <div id="prologue">
        <blockquote class="blockquote text-center">
            <p class="mb-0"><i style="color:black !important">"No problem can be solved from the same level of consciousness
                    that created it."</i></p>
            <footer class="blockquote-footer" style="color:white">Albert Einstein</footer>
        </blockquote>


    </div>

    </div>
    <div id="rContent" style="margin-top: 54px">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">

                    <nav class="nav navbar-expand-sm bg-dark navbar-dark nbar">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php" tabindex="-1" aria-disabled="true"><i class="fa fa-home" aria-hidden="true"></i>
                                </a>
                            </li>



                            <li class="nav-item">

                                <a class="nav-link active" href="MIPC.php">MIP Connector</a>
                            </li>

                            <li class="nav-item">

                                <a class="nav-link active" href="WorkoutTracker.php">Workout Tracker</a>
                            </li>

                            <li class="nav-item">

                                <a class="nav-link active" href="teamrcf.php">Team RCF Website (Not Live)</a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link active" href="DSA.php">Some Documentation | New!</a>
                            </li>

                        </ul>

                    </nav>

                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <button id="toggle-btn" class="btn" onclick="toggleMode()">Toggle Light / Dark Mode</button>
            </nav>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-body" style="scale:.65;margin-top:-10%">
                            <img src="img/headshot.png" class="img-fluid">
                        </div>

                        <div style="margin-top:-5%;border: none;width:.85;font-size:2vmin" style=" transition-property: background-color, color;    transition-duration: .5s;background-color:transparent!" class="card-footer">
                            &nbsp <h3 style="color:salmon; font-family: 'Roboto Mono', monospace;">Hi, I’m Sam Alcosser.</h3> I am an (aspiring) full stack web
                            developer. As seen in this portfolio, I have many technical skills in back end technologies such
                            as SQL, Java, Scala, and PHP. I also am competent with the three main web languages, HTML/CSS
                            and JavaScript, and I am also comfortable using Bootstrap 4. I am currently studying computer
                            science at Marist College in Poughkeepsie, NY. I have also been working with Collective
                            Strategies through Marist College since September of 2019. I hope you enjoy my site!
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row" id="links">

                        <ul style="overflow:hidden;margin-bottom:5px" class="list-unstyled">
                            <li><code> 1</code> <span style="color:darkgreen"> /* </span></li>
                            <li><code> 2</code> <span style="color:darkgreen"> /************************\ </span></li>
                            <li><code> 3</code> <span style="color:darkgreen"> </span></li>
                            <li><code> 4</code> <span style="color:darkgreen"> Sam Alcosser</span></li>
                            <li><code> 5</code> <span style="color:darkgreen">Student Software Developer</span></li>
                            <li><code> 6</code> <span style="color:darkgreen"> </span></li>
                            <li><code> 7</code> <span style="color:darkgreen">\************************/</span></li>
                            <li><code> 8</code> <span style="color:darkgreen">*/ </span></li>
                            <li><code> 9</code></li>
                            <li><code>10</code></li>
                            <li><code>11</code> <span style="color:darkgreen">// Links to Relevant Resources</span></li>
                            <li><code>12</code> <span style="color:rgb(141, 220, 246)">console.</span><span style="color:lightgreen">log</span>(<span style="color:darkorange !important">"<a href="mailto:samalcosser@gmail.com">Email</a>"</span>);
                            </li>
                            <li><code>13</code> <span style="color:rgb(141, 220, 246)">System.out.</span><span style="color:lightgreen">println</span>(<span style="color:darkorange !important">"<a href="Resume.pdf">Resume</a>"</span>);
                            </li>
                            <li><code>14</code> <span style="color:lightgreen">std::</span><span style="color:rgb(141, 220, 246)">cout</span> <span style="color: lightgreen">
                                    << </span> <span style="color:darkorange !important">"<a href="https://www.linkedin.com/in/samuel-alcosser-9212b3181/">LinkedIn</a>"
                                </span><span style="color:lightgreen">
                                    << std::</span> <span style="color:lightyellow">endl;
                                </span></li>
                            <li><code>15</code> <span style="color:rgb(43, 113, 226)">print</span>(<span style="color:darkorange">"<a href="https://github.com/salcosser">GitHub</a>"</span><span id="last">)</span>
                            </li>
                            <li><code>16</code></li>
                            <li><code>17</code></li>
                            <li><code>18</code></li>
                            <li><code>19</code></li>

                        </ul>


                    </div>
                </div>




            </div>

            <?php

            echo '<script type="text/JavaScript">document.getElementById("prologue").style.display = "none";console.log("turnedOff");</script>'; //hotfix for sessions not working



            ?>