<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['user_status'])){
    header("location:Login_page.php");
}
?>
<html>
<title>University Information System</title>
<head>
<?php include 'Header.php' ?>
<?php include 'Sidebar.php' ?>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
</body>
</html>