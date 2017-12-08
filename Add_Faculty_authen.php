<?php
session_start();
$target_callback=$_SERVER['HTTP_REFERER'];
$userid = $_POST['userid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$cont = $_POST['cont'];
$speciality = $_POST['speciality'];
$dob = $_POST['dob'];
$addr = $_POST['addr'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'uis');

$sql="INSERT INTO `faculty`(`User_Id`, `First_Name`, `Last_Name`, `Username`, `Contact_Information`, `Speciality`, `Date_of_Birth`, `Security_Question`, `Security_Answer`, `Pwd`, `Address`) 
VALUES ('$userid','$fname','$lname', '$username','$cont','$speciality','$dob', '','','','$addr')";
$row=mysqli_query($con, $sql);


header('Location:'.$target_callback);
$faculty_added = 1;
$_SESSION['faculty_added']=$faculty_added;
?>