<?php
session_start();
include('./functions/helper.php');

include('./templates/header.php');
include('./templates/navbar.php');
?>
<div class="wrapper">

<?php
include('./templates/profile.php');
?>
</div>

<?php

include('./templates/foot.php');
?>