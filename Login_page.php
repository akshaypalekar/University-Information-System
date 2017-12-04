<!DOCTYPE html>
<?php
session_start();
?>
<html>
<title>Computer Science Dept</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body background="Images/nyit_bg.jpg" style ="background-size: 100%;">
    <?php
    $user_invalid=@$_SESSION['user_invalid'];
    if($user_invalid)
    {
    echo "<script type='text/javascript'>alert('Invalid Username/Password');</script>";
    }
    if(isset($_SESSION['user_invalid']))
    unset($_SESSION['user_invalid']);
    ?>
 <div class="form">
 <div class="thumbnail"><img src="Images/nyit_loginbox.png"/></div>
    <form method="post" action="Login_authentication.php">
        <div class="Login_container">
            <!-- <label>
                <b>Username</b>
            </label> -->
            <input type = "text" placeholder="Enter Username" name="username" id="username" required>
            <!-- <label>
                <b>Password</b>
            </label> -->
            <input type = "password" placeholder="Enter Password" name="pwd" id="pwd" required>
            <!-- <input type = "submit" value="Login"> -->
            <button type="submit">Login</button> <br> <br>
            <a href="#">Forgot Password?</a>
        </div>
    </form>
</div>
</body>
</html>