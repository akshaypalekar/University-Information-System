<!DOCTYPE html>
<?php
session_start();
include 'Sidebar.php';
include 'Header.php';
if(!isset($_SESSION['user_status'])){
    header("location:Login_page.php");
}
?>

<html>
<title>University Information System</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="personal_info">
<?php
$userId = $_SESSION['userId'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');

$sql="SELECT * FROM Students WHERE User_Id = '$userId'";
$data = mysqli_fetch_array(mysqli_query($con,$sql));



echo "<table class ='personal_info_table'>";
echo "<tr><td>UserID:</td><td>".$data['User_Id']."</tr><td>";
echo "<tr><td>Username:</td><td>".$data['Username']."</tr><td>";
echo "<tr><td>Firstname:</td><td>".$data['First_Name']."</tr><td>";
echo "<tr><td>Lastname</td><td>".$data['Last_Name']."</tr><td>";
echo "<tr><td>Address:</td><td>".$data['Address']."</td></tr>";
echo "<tr><td>Contact Information:</td><td>".$data['Contact_Information']."</td></tr>";
echo "<tr><td>Emergency Contact:</td><td>".$data['Emergency_Contact']."</td></tr>";
echo "<tr><td>Major:</td><td>".$data['Major']."</tr><td>";
echo "<tr><td>DOB:</td><td>".$data['Date_of_Birth']."</tr><td>";
echo "</table>";
?>



<!-- <form action="" method="post">
 Address:  <button name = "edit" value="edit">Edit</button> <br><br>
<input type = "text" name = "addr"><br><br>

Cell Phone:  <button name = "edit" value="edit">Edit</button><br><br>
<input type = "number" name = "cell"><br><br>

Emergency Contact  <button name = "edit" value="edit">Edit</button><br><br>
<input type = "number" name = "cell">
</form> -->
</div>
</body>
</html>