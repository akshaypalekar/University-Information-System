<html>
<title>NYIT</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body background="Images/nyit_bg.jpg" style ="background-size: 100%;">
<?php
    $admin_invalid=@$_SESSION['admin_invalid'];
    if($admin_invalid)
    {
    echo "<script type='text/javascript'>alert('Invalid Username/Password');</script>";
    }
    if(isset($_SESSION['admin_invalid']))
    unset($_SESSION['admin_invalid']);
    ?>
 <div class="form">
 <div class="thumbnail"><img src="Images/nyit_loginbox.png"/></div>
    <form method="post" action="Admin_loginpage_authen.php">
        <div class="Login_container">
            <input type = "text" placeholder="Enter Username" name="username" id="username" required>
            <input type = "password" placeholder="Enter Password" name="password" id="password" required>
            <button type="submit">Login</button> <br> <br>
            
        </div>
    </form>
</div>
</body>
</html>