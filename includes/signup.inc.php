<?php 
    require('dbconnect.inc.php');

    if (isset($_POST['signup-submit'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $role = htmlspecialchars($_POST['role']);
        $password = htmlspecialchars($_POST['password']);

        if (empty($username) || empty($email) || empty($role) || empty($password)) {
            header("Location:../signup.php?Error=please fill all records");
            exit();
        }else{

            $pwd = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `Users` (`username`, `email` , `password` , `role`) VALUES ('$username','$email','$pwd','$role')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            header("Location:../login.php?message=successfully sign up you can login ");
            exit();

        }
    }

