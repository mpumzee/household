<?php
session_start();
$firstname = '';
$lastname = '';
$dob = '';
$update = false;
$id = 0;
$mysqli = new mysqli('localhost', 'root', '', 'household') or die(mysqli_error($mysqli));

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
    if($password == $confirm_password){
        $mysqli->query("INSERT INTO users (fulname, email, password) VALUES('$fullname','$email','$password') ") 
    or die($mysqli->error);
    }
    

    $_SESSION['message'] = "Record Saved Successfully";
    $_SESSION['msg_type'] = "success";
}
