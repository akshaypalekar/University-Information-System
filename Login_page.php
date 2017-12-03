<!DOCTYPE html>
<?php
session_start();
?>
<html>
<title>Computer Science Dept</title>
<head></head>
<body>
    <?php
    $user_invalid=@$_SESSION['user_invalid'];
    if($user_invalid)
    {
    echo "<script type='text/javascript'>alert('Invalid Username/Password');</script>";
    }
    if(isset($_SESSION['user_invalid']))
    unset($_SESSION['user_invalid']);
    ?>
    <form method="post" action="Login_authentication.php">
        <div class="container">
            <label>
                <b>Username</b>
            </label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>
            <label>
                <b>Password</b>
            </label>
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>