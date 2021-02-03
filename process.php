<?php
session_start();

$firstname = '';
$lastname = '';
$dob = '';
$update = false;
$id = 0;
$error_msg = '';
$logged_in = false;
$user_id = 0;
$mysqli = new mysqli('localhost', 'id16075482_root', '6tz]d}~hdBe{Ld7B', 'id16075482_household') or die(mysqli_error($mysqli));



if (isset($_POST['save'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $creator = $_POST['creator'];
    $mysqli->query("INSERT INTO children (firstname, lastname, dob, creator) VALUES('$firstname','$lastname','$dob', $creator) ") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record Saved Successfully";
    $_SESSION['msg_type'] = "success";
}

if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $id = $_POST['id'];
    $mysqli->query("UPDATE children SET firstname = '$firstname', lastname = '$lastname', dob = '$dob' WHERE id = $id") or die($mysqli->error) 
    or die($mysqli->error);

    $_SESSION['message'] = "Record Updated Successfully";
    $_SESSION['msg_type'] = "info";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];    
    $mysqli->query("UPDATE children SET active = 0 WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Record Deleted Successfully";
    $_SESSION['msg_type'] = "danger";

    header("location:children.php");
}

/* Registration */

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $result = $mysqli->query("SELECT id FROM users WHERE email = '$email' ");
    $row = $result->fetch_array();    
    $user_exists = $row['id'] == null ? false : true;
    if($password != $confirm_password){
        $_SESSION['error_msg'] = "Passwords do not match";
    }
    else if($user_exists){
        $_SESSION['error_msg'] = "User already exists";
    }
    else{
        $mysqli->query("INSERT INTO users (fullname, email, password) VALUES('$fullname','$email','$password') ") 
    or die($mysqli->error);
    $_SESSION['fullname'] = $fullname;
    header("location:login.php");
    }   
    
}

/* Login */
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'")
    or die($mysqli->error);
    $row = $result->fetch_array();       
    $user_exists = $row == null ? false : true;  
    // var_dump($row == null); exit(); 
    if($row != null){
        $_SESSION['user_id'] = $row['id'];        
        $_SESSION['logged_in'] = true;
        $_SESSION['fullname'] = $row['fullname'];
        header("location:children.php");
    }
    else{                 
        $_SESSION['error_msg'] = "Incorrect login details!";
        header("location:login.php");        
    }
}   


/* Logout */
if (isset($_GET['logout'])) {
    $logout = $_GET['logout'];
    if ($logout == true) {
        session_unset();
        $_SESSION['error_msg'] = "";
        header("location:login.php");
    }

    
}
