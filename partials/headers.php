<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($page_title)) echo $page_title; ?></title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/sweetalert.min.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fab1c631cada56a"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 stbartlogo lead">
            <img src="logowebred.jpg" alt="Saint Bartholomew Logo">
        </div>
        <div class="col-md-8 craig">
            <p> SAINT BARTHOLOMEW CATHOLIC CHURCH <br> 
                ARCHDIOCESE OF GALVESTON-HOUSTON  <br>
                5356 11th St Katy, TX 77493 <br>
                281-391-4758 </p>
        </div>
        <div class="col-md-2 ml-auto lead">
          <img src="afflogo.jpg" class="stbartlogo" alt="Adult Faith Formation Logo - Saint Bartholomew Logo">
        </div>
    </div>
</div>

<div class="container-fluid">
<nav class="murray navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php">St Bart Adult Faith Formation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar navbar-nav ml-auto"><i class="hide"></i>
            <li class="nav nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
                <?php if((isset($_SESSION['username']) || isCookieValid($db))): ?>
                <li class="nav nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav nav-item">
                    <a class="nav-link" href="members.php">Members</a>
                </li>
                <li class="nav nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
                <?php else: ?>
                <li class="nav nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <!-- <li class="nav nav-item">
                    <a class="nav-link" href="members.php">Members</a>
                </li> -->
                <!-- <li class="nav nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li> -->
                <li class="nav nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <?php endif ?>
        </ul>
  </div>
</nav>
</div>




    </div>
</nav>