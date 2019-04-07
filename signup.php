<?php
$page_title = "Registration Page - Saint Bartholomew Adult Faith Formation";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
?>

<div class="container">
    <section class="col col-lg-7">
        <h2>Registration Form </h2><hr>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <form action="" method="post">
            <div class="form-group">
                <label for="emailField">Email Address</label>
                <input type="text" class="form-control" name="email" id="emailField" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="usernameField">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="fullnameField">Full Name</label>
                <input type="text" class="form-control" name="fullname" id="fullnameField" placeholder="FullName">
            </div>
            <div class="form-group">
                <label for="phoneField">Phone</label>
                <input type="text" class="form-control" name="phone" id="phoneField" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="passwordField">Password</label>
                <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
            </div>
            <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" name="signupBtn" class="btn btn-primary float-right">Signup</button>
            <div class="g-recaptcha" data-sitekey="6Lc7d3sUAAAAAEfgiiqKf8GeLd4X3AxdBkGkToGQ"></div>
        </form> <br>
    </section> <br>
    <p><a class="btn btn-warning" href="index.php" role="button">Back</a> </p>
</div>

<?php include_once 'partials/footers.php'; ?>
</body>
</html>