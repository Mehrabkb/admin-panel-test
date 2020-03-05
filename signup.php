<?php
    require('header.php');
?>
    <form action="includes/signup.inc.php" method="post">
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">role:</label>
            <select class="form-control" name="role">
            <option value="1">Admin</option>
            <option value="2">user</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
    </form>

<?php 
    require('footer.php');
?>