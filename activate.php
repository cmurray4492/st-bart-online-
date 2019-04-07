<?php
$page_title = "Adult Faith Formation - Account Activation";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
?>

<div class="container">
    <div class="flag">
        <h1>Adult Faith Formation - Saint Bartholomew Catholic Church - Katy, TX</h1>
        <p>Here is another page where we could include more information. Thanking them for registering 
        and reminding them of the date? anything else? </p>
        <?php if(isset($result)) echo $result; ?>
    </div>
</div>

<?php include_once 'partials/footers.php'; ?>
</body>
</html>