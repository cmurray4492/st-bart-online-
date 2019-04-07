<?php
$page_title = "St Bart Katy TX AFF - Info Page";
include_once 'partials/headers.php';
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron flag">
                <h1 class="display-4">Saint Bartholomew Adult Faith Formation - Katy, TX</h1>
                <p class="lead">Welcome to the registraion site for Saint Bartholomew's<br>
                        Adult Faith Formation Classes</p>
                <hr class="my-4">
                <?php if(!(isset($_SESSION['username']))): ?>
                    <p class="lead">You are not signed in <a class="btn btn-primary" role="button" href="login.php">Login</a>
                    <br><br> <p class="lead">Ready to signup for Discovering Christ? <a class="btn btn-success" href="signup.php" role="button">Sign Up</a> </p>
                <?php else: ?>
                    <p class="lead">You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>
                    <a class="btn btn-danger" role="button" href="logout.php">Logout</a> </p>
                <?php endif ?>
                
                <br>
                <p class="lead" >What more information? <a class="btn btn-info" href="about.php" role="button">Learn more</a> </p>
                </div>
            </div>
    </div>




    </div>
</div>

<?php  include_once 'partials/footers.php'; ?>
</body>
</html>