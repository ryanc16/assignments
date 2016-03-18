<?php
    include('includes/session_update.php');
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APP Club</title>

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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="events.php">Events Home</a></li>
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
                    <h1>Association of Professional Programmers</h1>
                    <hr>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p>To any IT students currently seeking an extra-curricular activity the Association of Professional Programmers (APP) is a new student founded organization specifically focused on programming. Our members have the opportunity to participate in off campus programming competitions against other universities. We have also hosted a programming competition and have plans for another one in the near future. Fellow members and Professors present lectures on trending computer topics and software used in the business environment. We have also received several Raspberry Pi's and an Oculus Rift to program. We are also interested in setting up scheduled team projects as well, but that means we need you! If you are interested in anything mentioned above or would just like to meet up with other programming buffs on campus then join APP.
                        <br>
                        <br>
                        <strong>We meet every Tuesday in the Gaming lab in ATHS 228 during College hour 3:30-4:30 pm.</strong>
                        <br>
                        <br> Hope to see you there!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="extra-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Recent Projects</h2>
                    <p>
                        <a href="projects.php" data-toggle="tooltip" title="Pi-Arcade"><img src="images/pi-arcade.jpg" class="img-thumbnail" /></a>
                    </p>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <h2>Connect with APP</h2>
                    <ul class="vertical-list">
                        <li>
                            
                            <a href="mailto:app@pct.edu"><img src="images/Email-Logo.png" /> app@pct.edu</a>
                        </li>
                        <li>
                            <a href="https://github.com/pct-app">
                                <img src="images/GitHub-Logo.png" /> Github
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Twitter-Logo.png" /> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/GoogleDrive-Logo.png" /> Google Drive
                            </a>
                        </li>
                    </ul>
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
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>

</html>