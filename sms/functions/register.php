<?php 
include 'config.php';
$errors=[];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($fname)){
        $errors["fname"] = "First name is required!";
    }elseif(strlen($fname) < 3){
        $errors["fname"] = "First name must be at least 3 characters!";
    }

    if($password == $confirm_password){
        $sql = "Insert into users (fname, email, password) values ('$fname', '$email', '$password')";

        if(mysqli_query($conn, $sql)){
            echo "New record created successfully";
        } else {
            echo "Error inserting record";
        }
    }  else {
        echo "Passwords do not match!";
    } 
}