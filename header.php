<?php
    session_start();
    error_reporting(0);
    include('functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Test</title>
</head>
<body>
    <header>
        <div class="container-fluid bg-light">
            <div class="row m-0 p-2">
                <div class="col-lg-2">
                    Title Site
                </div>
                <?php if(islogin()){?>
                <div class="col-lg-2">
                    <a href="includes/logout.inc.php" class="btn btn-primary">logout</a>
                </div>
                <?php }else{ ?>
                <div class="col-lg-8">
                    <form class="form-inline" action="includes/login.inc.php" method="post">
                        <?php if(isset($_GET['Error'])){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?php 
                                    $error = $_GET['Error'];
                                    echo $error;
                                ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="username">username:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="password">
                        </div>
                        <button type="submit" class="btn btn-success" name="login-submit">Login</button>
                    </form>
                </div>
                <div class="col-lg-2">
                    <a href="signup.php" class="btn btn-primary">Sign Up</a>
                </div>
                        <?php }?>
            </div>
        
        </div>
    </header>
    <main>
