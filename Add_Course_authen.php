<?php
session_start();

$courseid = $_POST['courseid'];
$course_name = $_POST['cname'];
$faculty_id = $_POST['faculty_id'];
$course_desc = $_POST['c_desc'];
$credits = $_POST['cred'];
$time_start = $_POST['time_start'];
$status = $_POST['status'];
$capacity = $_POST['cap'];
$course_level = $_POST['course_level'];
$course_day = $_POST['course_day'];
$time_end = $_POST['time_end'];


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'uis');

if($status=='open'){
    $status = 'Open';
}
else{
    $status = 'Closed';
}


if($course_level=='graduate'){
    $course_level = 'Graduate';
}
else{
    $course_level = 'Undergraduate';
}


$sql="INSERT INTO courses 
Values ('$courseid', '$course_name', '$faculty_id', '$course_desc', '$credits', '$time_start', '$status', '$capacity', '$course_level', '$course_day', '$time_end')"; 



$row = mysqli_query($con, $sql);

header("Location: Admin_Homepage.php");
?>