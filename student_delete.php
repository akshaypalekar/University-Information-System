<?php
session_start();
$target_callback=$_SERVER['HTTP_REFERER'];
$id = $_REQUEST['User_Id'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');

$sql = "DELETE from students where User_Id = '$id'";
$row = mysqli_query($con,$sql);

header('Location:'.$target_callback);

?>