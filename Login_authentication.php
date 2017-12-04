<?php
session_start(); //Session started
$target_callback=$_SERVER['HTTP_REFERER'];
$username=$_REQUEST['username']; // Saving Username taken from the login page to $username
$password=$_REQUEST['pwd']; // Saving password taken from login page to $password
$con=mysql_connect('localhost','root',''); // making a connection to the database
mysql_select_db('uis', $con);
$sql="SELECT *  FROM users WHERE username='$username' and pwd='$password'";
$row= mysql_num_rows(mysql_query($sql, $con));
$data= mysql_fetch_array(mysql_query($sql, $con));
if($row>0){
    $status='logged in';
    $_SESSION['user_status']=$status;
    $_SESSION['name']=$data["First_Name"];

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
mysql_close($con);   
?> 