<?php
session_start();
include('./functions/helper.php');

if (!is_user_logged_in()) {
    header("Location: login.php");
    exit();
}

include('./templates/header.php');
include('./templates/navbar.php');
?>

<div class="content-wrapper">
    <div class="content">
        <div class="container">

            <div class="py-5">
                <h2>About</h2>

                <p class="text-muted mt-3">
                    Student Management System is a simple application
                    designed to help manage student information efficiently.
                </p>

                <p class="text-muted">
                    The system provides an easy way to add, view, update,
                    and manage student records from one place.
                </p>
            </div>

        </div>
    </div>
</div>

<?php include('./templates/foot.php'); ?>
