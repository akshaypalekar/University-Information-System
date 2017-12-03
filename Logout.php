<?php
session_start();
if(isset($_SESSION['user_status']))
{
unset($_SESSION['user_status']);
}
if(isset($_SESSION['username']))
{
unset($_SESSION['username']);
}
header("location: Login.php");
?>