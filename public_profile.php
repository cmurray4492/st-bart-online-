<?php
$page_title = "AFF St Bart Katy TX -  {$_GET['u']}'s Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';

?>

<div class="container">
    <div >
        <h1><?php if(isset($username)) echo "{$username}'s"; ?> Profile</h1>
            <section class="col col-lg-7">
                <!-- <div class="row col-lg-7" style="margin-bottom: 10px;">
                    <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" class="img img-rounded" width="200"/>
                </div>
                --> 
                <table class="table table-bordered table-condensed">
                    <tr><th style="width: 20%;">Username:</th><td><?php if(isset($username)) echo $username; ?></td></tr>
                    <tr><th>Full Name:</th><td><?php if(isset($fullname)) echo $fullname; ?></td></tr>
                    <tr><th>Email:</th><td><?php if(isset($email)) echo $email; ?></td></tr>
                    <tr><th>Phone:</th><td><?php if(isset($phone)) echo $phone; ?></td></tr>
                    <tr><th>Status:</th><td><?php if(isset($status)) echo $status; ?></td></tr>
                    <tr><th>Date Joined:</th><td><?php if(isset($date_joined)) echo $date_joined; ?></td></tr>
                </table>
            </section>
    </div>
</div>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>