<?php
session_start();
include('./functions/helper.php');

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
                
                <div class="text-center py-5">
                <h1 class="font-weight-light">
                    Student Management System
                </h1>

                <p class="text-muted mt-3">
                    Welcome back, <?= htmlspecialchars($_SESSION['username']) ?>.
                </p>

                <a href="profile.php" class="btn btn-primary mt-3">
                    Manage Profile
                </a>
            </div>

            </div>
        </div>

    </div>

<?php
include('./templates/foot.php');
?>