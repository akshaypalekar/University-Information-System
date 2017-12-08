<?php
session_start();
$target_callback=$_SERVER['HTTP_REFERER'];
$username=$_POST['username']; // Saving Username taken from the login page to $username
$password=$_POST['password']; // Saving password taken from login page to $password
$con=mysqli_connect('localhost','root',''); // making a connection to the database
mysqli_select_db($con,'uis');

$sql="SELECT *  FROM Admin WHERE username='$username' and password='$password'";
$row= mysqli_num_rows(mysqli_query($con,$sql));
$data= mysqli_fetch_array(mysqli_query($con,$sql));

if($row>0){
    $admin_login_status='logged in';
    $_SESSION['admin_status']=$admin_login_status;
    $_SESSION['admin_name']=$data["First_Name"];
    header("location:Admin_Homepage.php");
}
else{
    $admin_invalid=1;
    $_SESSION['user_invalid']=$admin_invalid;
    header('Location:'.$target_callback);
}
?> 
    