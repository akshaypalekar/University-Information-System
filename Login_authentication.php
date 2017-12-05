<?php
session_start(); //Session started
$target_callback=$_SERVER['HTTP_REFERER'];
$username=$_REQUEST['username']; // Saving Username taken from the login page to $username
$password=$_REQUEST['pwd']; // Saving password taken from login page to $password
$con=mysqli_connect('localhost','root',''); // making a connection to the database
mysqli_select_db($con,'uis');
$sql="SELECT *  FROM users WHERE username='$username' and pwd='$password'";
$row= mysqli_num_rows(mysqli_query($con,$sql));
$data= mysqli_fetch_array(mysqli_query($con,$sql));
if($row>0){
    $status='logged in';
    $_SESSION['user_status']=$status;
    $_SESSION['name']=$data["First_Name"];
    $_SESSION['userId']=$data["User_Id"];

    if($data["Account_Type"]=='Student'){
    header("location:Student_Homepage.php");
    }
    elseif($data["Account_Type"]=='Faculty'){
    header("location:Faculty_Homepage.php");
    }
    elseif($data["Account_Type"]=='Advisor'){
    header("location:Advisor_Homepage.php");
    }
    elseif($data["Account_Type"]=='Bursar'){
    header("location:Bursar_Homepage.php");
    }
    elseif($data["Account_Type"]=='Admin'){
    header("location:Admin_Homepage.php");
    }
}
else{
    $user_invalid=1;
    $_SESSION['user_invalid']=$user_invalid;
    header('Location:'.$target_callback);
}
mysqli_close($con);   
?> 