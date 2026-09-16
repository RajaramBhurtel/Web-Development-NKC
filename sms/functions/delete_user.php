<?php
include('./config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql ="DELETE FROM users WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        header("Location: ../users.php?success=1");
    }else{
        header("Location: ../users.php?error=1");
    }
}