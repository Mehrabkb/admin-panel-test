<?php
    require('header.php');
?>
    <form action="includes/login.inc.php" method="post">
        <?php if(isset($_GET['message'])){?>
            <div class="alert alert-success" role="alert">
                <?php 
                    $message = $_GET['message'];
                    echo $message;
                ?>
            </div>
        <?php }?>
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary" name="login-submit">Login</button>
    </form>

<?php 
    require('footer.php');
?>