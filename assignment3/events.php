<?php
    include('includes/session_update.php');
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APP Club - Events</title>
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
                            <li class="active"><a href="events.php">Events Home</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="gamejam.php">GameJam</a></li>
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
                    <h1>APP Events</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        Every Semester APP Club hosts various events. There are presentations of new technologies, fundraising, and member driven competitions. There are two major events, of which one will be held per semester. These events are GameJam and the Programming Competition. Club memebers will take a vote on their preferred event for the semester and fundraising will begin shortly after to help award some great prizes to the winners!
                    </p>
                    <h2>Spring 2016 Event Schedule</h2>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h4 class="panel-title">January</h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">12 - Club Meeting</li>
                                        <li class="list-group-item">19 - <span class="label label-danger">Important</span> - All members should try to attend to run or vote on the Marketing Chair Executive position.</li>
                                        <li class="list-group-item">26 - Club Meeting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <h4 class="panel-title">Fubruary</h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">2 <span class="label label-primary">Presentation</span> - Dr. Golshan presenting ProLog</li>
                                        <li class="list-group-item">9 - Club Meeting</li>
                                        <li class="list-group-item">15 - <span class="label label-info">Event</span> - After Valentines Day Bake Sale - ATHS Lobby from 9A.M. to 2P.M.</li>
                                        <li class="list-group-item">16 - Club Meeting</li>
                                        <li class="list-group-item">23 - Club Meeting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            <h4 class="panel-title">March</h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">1 - Club Meeting</li>
                                        <li class="list-group-item">8 - Club Meeting</li>
                                        <li class="list-group-item">15 - Club Meeting</li>
                                        <li class="list-group-item">22 - Club Meeting</li>
                                        <li class="list-group-item">26 - <span class="label label-info">Event</span> GameJam - APP Club Presents the 3rd annual GameJam! Event will be held from 12 noon to 12 midnight. <a href="gamejam.php">Regsiter</a> you and your team now!</li>
                                        <li class="list-group-item">29 - Club Meeting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            <h4 class="panel-title">April</h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <li class="list-group-item">5 - <span class="label label-success">Announcement</span> GameJam winners will be announced!</li>
                                    <li class="list-group-item">12 - Club Meeting</li>
                                    <li class="list-group-item">19 - <span class="label label-primary">Presentation</span> - Git and GitHub by Justin Barnyak</li>
                                    <li class="list-group-item">26 - Club Meeting</li>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            <h4 class="panel-title">May</h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <li class="list-group-item">3 - <span class="label label-danger">Important</span> Semester End Meeting - All memebers should try to attend for voting on opening positions on Executive Board!</li>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
                
    </section>
    <section id="extra-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Learn More about GameJam</h2>
                    <a href="gamejam.php">
                        <img src="images/gamejam.jpg" class="img-thumbnail" />
                    </a>
                </div>
                <div class="col-md-6">
                    <h2>Learn More about Programming Comp.</h2>
                    <a href="programming.php">
                        <img src="images/prog-comp.JPG" class="img-thumbnail" />
                    </a>
                </div>
            </div>
        </div>
    </section>
<br>
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
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>