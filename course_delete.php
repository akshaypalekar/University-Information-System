<?php
session_start();
$target_callback=$_SERVER['HTTP_REFERER'];
$id = $_REQUEST['Course_Id'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');

$sql = "DELETE from courses where Course_Id = '$id'";
$row = mysqli_query($con,$sql);

header('Location:'.$target_callback);

?>