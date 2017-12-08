<?php
session_start();
if(isset($_SESSION['admin_status']))
{
unset($_SESSION['admin_status']);
}
if(isset($_SESSION['username']))
{
unset($_SESSION['username']);
}
header("location: Admin_loginpage.php");
?>