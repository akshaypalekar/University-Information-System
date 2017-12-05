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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="Student_Schedule">
<?php

?>
</div>
</body>
</html>