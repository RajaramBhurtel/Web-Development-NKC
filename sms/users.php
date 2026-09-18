<?php
session_start();
include('./functions/helper.php');
include('./functions/config.php');
if(!is_user_logged_in()){
    header("Location: login.php");
    exit();
}

include('./templates/header.php');
include('./templates/navbar.php');
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <?php
            include('./templates/users.php');
            ?>
        </div>
    </div>
</div>

<?php
include('./templates/foot.php');
?>