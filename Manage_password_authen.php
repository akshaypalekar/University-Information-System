<?php
session_start();

$userid = $_SESSION['newuser_id'];
$password=$_POST['password'];
$security_question=$_POST['security_question'];
$security_answer=$_POST['security_answer'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'uis');

if($security_question==1){
    $security_question = 'What is your Favourite Color?';
}else{
    $security_question = 'What is your Favourite Car Model?';
}

    $sql= "UPDATE students 
    set Security_Question = '$security_question', Security_Answer = '$security_answer', Pwd = '$password' 
    WHERE User_Id='$userid'"; 
    mysqli_query($con,$sql);

    header("Location: Login_page.php");
?>
