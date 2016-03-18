<?php
    include('includes/session_update.php');
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APP Club - GameJam</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom css -->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="images/AppLogo.png">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="events.php">Events Home</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="active"><a href="gamejam.php">GameJam</a></li>
                            <li><a href="programming.php">Programming Competition</a></li>
                            <li><a href="fundraisers.php">Fundraisers</a></li>
                        </ul>
                    </li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="members.php">Members</a></li>
                </ul>
                <?php
                    if(isset($_SESSION['logged_in'])){
                        echo('
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['email'].'<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="includes/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    ');
                        }
                    ?>
            </div>
        </div>
    </nav>
    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>GameJam</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>GameJams are held in either the fall or spring semester of the school year, depending on memeber support. There is a theme for the competition and it will be announced the day of, right before start time. Winners will be announced right here in the following weeks after GameJam</p>
                    <ul>
                        <li>The Spring 2016 Game Jam will be held on Saturday, March 26th, from 12 noon to 12 midnight in <strong class="label label-danger">Penn's Inn</strong>.</li>
                        <li>This is a game development competition, aimed at bringing students and their best game ideas together to create awesome games.</li>
                        <li>Prizes will be award to the top teams and their game submissions based some *yet to be determined categories*.<!--on the following categories.
                        	<ul>
                            	<li></li>
                                <li></li>
                                <li></li>
                            </ul>-->
                        </li>
                        <li>Teams can consist of up to 4 people per team.</li>
                        <li>Assets will be provided, but other assets are permitted as well.</li>
                        <li>Food and games will be set up for taking breaks.</li>
                </div>
            </div>
        </div>
    </section>
    <section id="extra-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Past GameJams</h2>
                    <h3>Submissions</h3>
                    <p>
                        <a href="#" class="btn btn-primary" target="new">2015 submissions</a>
                        <br><br>
                        <a href="#" class="btn btn-primary" target="new">2014 submissions</a>
                    </p>
                    <h3>Winners</h3>
                    <ul>
                        <li>Tem Squad - <a href="#" >Exterminator</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <h2>Register for this year</h2>
                    <a href="#"><img src="images/GoogleDrive-Logo.png" style="width: 50px;" /> Google Forms</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Club Constitution</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p>Copyright &copy; 2016 APP Club</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery2.2.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>

</html>