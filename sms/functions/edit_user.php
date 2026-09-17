<?php 
session_start();
include 'config.php';
$errors=[];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($fname)){
        $errors["fname"] = "First name is required!";
    }elseif(strlen($fname) < 3){
        $errors["fname"] = "First name must be at least 3 characters!";
    }

    if(empty($email)){
        $errors["email"] = "Email is required!";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Invalid email format!";
    }else{
        $sql = "SELECT * FROM users WHERE email='$email' AND id != $id";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $errors["email"] = "Email already exists!";
        }
    }

//chcek if password is updated or not, if updated then hash it and update in database otherwise keep the old password

    if(empty($errors)){
        if(empty($password)){
            $sql = "UPDATE users SET fname='$fname', email='$email' WHERE id=$id";
        } else {
            $password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE users SET fname='$fname', email='$email', password='$password' WHERE id=$id";
        }
       
        if(mysqli_query($conn, $sql)){
            header("Location: ../edit_user.php?id=$id&success=1");
            exit();
        } else {
            $errors["signup"] = "Error updating user";
        }
    }

    $_SESSION['errors'] = $errors;
    header("Location: ../edit_user.php?id=$id");
    exit();
}