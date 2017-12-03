<?php
session_start(); //Session started
$target_callback=$_SERVER['HTTP_REFERER'];
$username=$_REQUEST['username']; // Saving Username taken from the login page to $username
$password=$_REQUEST['pwd']; // Saving password taken from login page to $password
$con=mysql_connect('localhost','root',''); // making a connection to the database
mysql_select_db('uis', $con);
$sql="SELECT username, pwd  FROM users WHERE username='$username' and pwd='$password'";
$row= mysql_num_rows(mysql_query($sql, $con));
if($row>0){
    $status='logged in';
    $_SESSION['user_status']=$status;
    $_SESSION['username']=$username;
    header("location:Homepage.php");
}
else{
    $user_invalid=1;
    $_SESSION['user_invalid']=$user_invalid;
    header('Location:'.$target_callback);
}
mysql_close($con);   
?> 

