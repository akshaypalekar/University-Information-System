<?php
session_start(); //Session started
//$target_callback=$_SERVER['HTTP_REFERER'];
$userid=$_REQUEST['uid']; // Saving Username taken from the login page to $username
$last_name=$_REQUEST['lname']; // Saving password taken from login page to $password

$con=mysqli_connect('localhost','root',''); // making a connection to the database
mysqli_select_db($con, 'uis'); 

$sql="SELECT *  FROM users WHERE User_Id='$userid' and Last_Name='$last_name'";
$row= mysqli_num_rows(mysqli_query($con, $sql));
$data= mysqli_fetch_array(mysqli_query($con,$sql));
if($row>0){
    $_SESSION['newuser_id']=$data["User_Id"];
    header("location:Manage_password.php");
}

else{
    echo "<script type='text/javascript'>alert('Invalid User ID or Last Name');</script>";
    header("location:New_user.php");
}

?>