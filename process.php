<?php
session_start();
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

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];    
    $mysqli->query("UPDATE children SET active = 0 WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Record Deleted Successfully";
    $_SESSION['msg_type'] = "danger";

    header("location : children.php");
}