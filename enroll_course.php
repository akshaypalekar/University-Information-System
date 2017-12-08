<?php
session_start();
$target_callback=$_SERVER['HTTP_REFERER'];
$userId = $_SESSION['userId'];
$Course_Id=$_REQUEST['Course_Id'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');

$sql = "SELECT Capacity FROM Courses WHERE Course_Id = '$Course_Id'";
$get_capacity= mysqli_fetch_array(mysqli_query($con,$sql));

if($get_capacity['Capacity']==0){
    $sql="UPDATE Courses SET Course_Status = 'Closed' WHERE Course_Id = '$Course_Id'";
    $reduce_capacity = mysqli_query($con,$sql);    
}else{
$sql="SELECT * FROM course_enrollment WHERE Course_Id = '$Course_Id' AND User_id = '$userId'";
$row = mysqli_num_rows(mysqli_query($con,$sql));

if($row>0)
{
    $course_taken=1;
    $_SESSION['course_taken']=$course_taken;
    header('Location:'.$target_callback);
}
    else{
$sql="INSERT INTO course_enrollment VALUES ('$userId','$Course_Id')";
$result = mysqli_query($con,$sql);

echo "<script type='text/javascript'>alert('Course Successfully Enrolled');</script>";

$sql="UPDATE Courses SET Capacity = Capacity-1 WHERE Course_Id = '$Course_Id'";
$reduce_capacity = mysqli_query($con,$sql);

header('Location:'.$target_callback);

}
}

?>