<?php
session_start(); //Session started
$target_callback=$_SERVER['HTTP_REFERER'];
$userid=$_REQUEST['uid']; // Saving Username taken from the login page to $username
$last_name=$_REQUEST['lname']; // Saving password taken from login page to $password
$con=mysql_connect('localhost','root',''); // making a connection to the database
mysql_select_db('uis', $con);

$sql="SELECT *  FROM student WHERE User_Id='$userid' and Last_Name='$last_name'";
$row= mysql_num_rows(mysql_query($sql, $con));

if($row>0){

    header("location:Manage_password.php");
}

else{
    echo "<script type='text/javascript'>alert('Invalid Username/Password');</script>";
    header("location:New_user.php");
}

?>