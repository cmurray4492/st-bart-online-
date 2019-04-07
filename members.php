<?php
$page_title = "Saint Bartholomew AFF - Members";
include_once 'partials/headers.php';
include_once 'partials/parseMembers.php';
?>

<div class="container"> 
    <div >
        <h1>Login System Members</h1>
              <section class="col col-lg-12">
                <?php if(count($members) > 0): ?>
                    <?php foreach ($members as $member): ?>
                    <hr>
                        <div class="row col-lg-4" style="margin-bottom: 10px;">
                            <div class="media">
                                <div class="media-left">
                                   <!-- <a href="public_profile.php?u=<?= $member['username'] ?>">
                                        <img src="<?= $member['avatar'] ?>" class="media-object" style="width:60px">
                                    </a>
                                    -->
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Username:
                                        <a href="public_profile.php?u=<?=$member['username']?>">
                                            <?= $member['username'] ?>
                                        </a>
                                    </h4>
                                    <p>Full Name: <?= $member['fullname'] ?> </p>
                                    <p>Email: <?= $member['email'] ?> </p>
                                    <p>Phone: <?= $member['phone'] ?> </p>
                                    <p>Join Date: <?=strftime("%b %d, %Y", strtotime($member['join_date'])) ?></p>
                                </div><hr>
                            </div> 
                        </div>
                    <?php endforeach; ?> 

                <?php else: ?>
                    <p>No member found</p>
                <?php endif; ?>
            </section>
           </div>
</div>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>