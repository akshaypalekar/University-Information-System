<!DOCTYPE html>
<?php
session_start();
include 'Sidebar.php';
include 'Header.php';
if(!isset($_SESSION['user_status'])){
    header("location:Login_page.php");
}
?>

<html>
<title>University Information System</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div class="personal_info">
<form action="" method="post">
 Address:  <button name = "edit" value="edit">Edit</button> <br><br>
<input type = "text" name = "addr"><br><br>

Cell Phone:  <button name = "edit" value="edit">Edit</button><br><br>
<input type = "number" name = "cell"><br><br>

Emergency Contact  <button name = "edit" value="edit">Edit</button><br><br>
<input type = "number" name = "cell">
</form>
</div>
</body>
</html>