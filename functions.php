<?php 
require('includes/dbconnect.inc.php');

function islogin(){
    // this function to check any user login 
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}

function isAdmin(){
    // this funtcion to check login user is admin 
    $username = $_SESSION['username'];
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM `Users` WHERE `username` = '$username' ");
    $stmt->execute();
    $role = $stmt->fetchColumn(4);
    if ($role == 1) {
        return true;
    }
    return false;
}

