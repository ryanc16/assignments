<?php
    include('includes/session_update.php');
?>
    <?php
    include('includes/session_update.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APP Club - Members</title>

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
                        <li class="active"><a href="members.php">Members</a></li>
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
                        <h1>Members</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Member Information</h2>
                        <p>
                            <a href="docs/app-constitution.pdf" target="new" class="btn btn-success">Club Constitution</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="extra-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                    if(isset($_GET['login_error'])){
                        $err = $_GET['login_error'];
                        $errMsg = "Something went wrong :/";
                        if($err == "wrong_pwd"){
                            $errMsg = "The login credentials provided were incorrect!";
                        }
                        else if($err == "user_not_exist"){
                            $errMsg = "An account with that email address does not exist!";
                        }
                        else if($err == "empty_fields"){
                            $errMsg = "Please fill out all fields!";
                        }
                        else if($err == "db_error"){
                            $errMsg = "Something went wrong with the database! :/";
                        }
                        echo('
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>'. $errMsg.'
                    </div>
                        ');
                    }
                    ?>
                            <?php
                    if(!isset($_SESSION['logged_in'])){
                        echo('
                    <h2>Member Login</h2>
                    <form id="form-login" method="post" action="includes/login.php">
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="loginEmail">Email</label>
                                <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="loginPass">Password</label>
                                <input type="password" class="form-control" id="loginPass" name="loginPass" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <br>
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                    </form>');
                    }
                    ?>
                    </div>
                    <div class="col-md-6">
                    <?php 
                    if(isset($_GET['register_error'])){
                        $err = $_GET['register_error'];
                        $errMsg = "Something went wrong :/";
                        if($err == "passwords_not_match"){
                            $errMsg = "The passwords provided did not match!";
                        }
                        else if($err == "user_already_exist"){
                            $errMsg = "An account with that email address already exists!";
                        }
                        else if($err == "empty_fields"){
                            $errMsg = "Please fill out all fields!";
                        }
                        else if($err == "db_error"){
                            $errMsg = "Something went wrong with the database! :/";
                        }
                        echo('
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>'. $errMsg.'
                    </div>
                        ');
                    }
                    if(!isset($_SESSION['logged_in'])){
                        echo('
                    <h2>Member Register</h2>
                    <form id="form-register" method="post" action="includes/register.php">
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="registerEmail">Email</label>
                                <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="registerPass1">Password</label>
                                <input type="password" class="form-control" id="registerPass1" name="registerPass1" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="registerPass2">Confirm Password</label>
                                <input type="password" class="form-control" id="registerPass2" name="registerPass2" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <br>
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </form>
                    ');
                    }
                ?>
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