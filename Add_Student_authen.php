<?php
session_start();
$target_callback=$_SERVER['HTTP_REFERER'];
$userid = $_POST['userid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$addr = $_POST['addr'];
$username = $_POST['uname'];
$cont = $_POST['cont'];
$emer = $_POST['emer'];
$major = $_POST['major'];
$course_career = $_POST['course_career'];
$credits = $_POST['credits'];
$dob = $_POST['dob'];


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

$sql="INSERT INTO `students`(`User_Id`, `First_Name`, `Last_Name`, `Address`, `Username`, `Contact_Information`, `Emergency_Contact`, `Major`, `Course_Career`, `Total_Credit_Needed`, `Date_of_Birth`, `Security_Question`, `Security_Answer`, `Pwd`) 
VALUES ('$userid','$fname','$lname','$addr','$username','$cont','$emer','$major','$course_career','$credits','$dob','','','')";
$row=mysqli_query($con, $sql);


header('Location:'.$target_callback);
$student_added = 1;
$_SESSION['student_added']=$student_added;
?>