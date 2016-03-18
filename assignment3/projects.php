<?php
    include('includes/session_update.php');
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APP Club - Projects</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Lightbox -->
    <link href="css/ekko-lightbox.css" rel="stylesheet" />
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
                    <li class="active"><a href="projects.php">Projects</a></li>
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
                    <h1>Projects</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        APP Club is always working on new projects.
                        <br>
                        Here are a few we've been working on:
                    </p>
                    <div class="panel panel-default">
                      <table class="table">
                        <th>Project</th><th>Description</th><th width="22%">Status</th>
                          <?php
                            include('includes/dbconnect.php');
                            $query = "SELECT * FROM projects";
                            $result = mysqli_query($db,$query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo('<tr>
                              <td><a data-toggle="lightbox" data-title="'.$row['title'].'" href="'.$row['imglink'].'"><img src="'.$row['imglink'].'" class="img-thumbnail" style="height: 70px"/></a>'.$row['title'].'</td>
                              <td>'.$row['description'].'</td>
                              <td>'.$row['status'].'</td>
                          </tr>');
                            }
                          ?>
                      </table>
                    </div>
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
                        <img src="images/pi-arcade.jpg" class="img-thumbnail" />
                    </p>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <h2>Project files</h2>
                    <ul class="vertical-list">
                        <li>
                            <span class=""></span><a href="https://github.com/pct-app">
                                <img src="images/GitHub-Logo.png" /> Github
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
    <script src="js/ekko-lightbox.js"></script>
    <script>
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>

</html>