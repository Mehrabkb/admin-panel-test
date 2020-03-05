<?php 

    require('dbconnect.inc.php');



    if(isset($_POST['login-submit'])){

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if(empty($username) || empty($password)){
            header("Location:../index.php?Error=Username or password is empty");
            exit();
        }else{
            $stmt = $conn->prepare("SELECT * FROM `Users` WHERE `username` = '$username' ");
            $stmt->execute();
            //$result = $stmt->fetchAll();
            $pwd = $stmt->fetchColumn(3);
            if ($stmt->rowCount()>0) {

                if (password_verify($password , $pwd)) {
                    session_start();
                    $_SESSION['username']= $username;
                    header("Location:../index.php");
                    exit();
                }else{
                    header("Location:../login.php?Error=password is wrong");
                    exit();
                }
            }
            else{
                header("Location:../index.php?Error=username doesnt our records");
                exit();
            }
        
        
        }


    }
