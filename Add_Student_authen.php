<?php
session_start();


$userid = $_REQUEST['userid'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$username = $_REQUEST['uname'];
$major = $_REQUEST['major'];
$course_career = $_REQUEST['course_career'];
$credits = $_REQUEST['credits'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'uis');

if($course_career=='graduate'){
    $course_career = 'Graduate';
}
else{
    $course_career = 'Undergraduate';
}

if($credits=='graduate_credit'){
    $credits = '30';
}
else{
    $credits = '40';
}

$sql= "INSERT INTO students (User_Id, First_Name, Last_Name, Username, Major, Course_Career, Total_Credit_Needed)
Values ('$userid', '$fname', '$lname', '$username', '$major', '$course_career', '$credits')"; 

mysqli_query($con, $sql);
header("Location: Admin_Homepage.php");


?>