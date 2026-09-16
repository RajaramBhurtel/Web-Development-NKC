<?php
session_start();
include('./functions/helper.php');
include('./functions/config.php');


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