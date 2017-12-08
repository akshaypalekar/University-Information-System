<?php
session_start();

$courseid = $_POST['courseid'];
$course_name = $_POST['cname'];
$faculty_id = $_POST['faculty_id'];
$course_desc = $_POST['c_desc'];
$day_time = $_POST['datetime'];
$status = $_POST['status'];
$capacity = $_POST['cap'];

if($status=='open'){
    $status = 'Open';
}
else{
    $status = 'Closed';
}

$sql= "INSERT INTO courses (Course_Id, Course_Name, Faculty_Id, Course_Description, Course_Time, Status, Total_Credit_Needed)
Values ('$userid', '$fname', '$lname', '$username', '$major', '$course_career', '$credits')"; 

mysqli_query($con, $sql);

header("Location: Admin_Homepage.php");
?>