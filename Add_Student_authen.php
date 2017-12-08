<?php
session_start();

$userid = $_POST['userid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$major = $_POST['major'];
$course_career = $_POST['course_career'];
$credits = $_POST['credits'];


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
VALUES ('$userid','$fname','$lname','','$username','','','$major','$course_career','$credits','','','','')";
$row=mysqli_query($con, $sql);

?>