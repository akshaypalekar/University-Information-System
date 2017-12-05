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
<div class="main"></div>
<?php
$userId = $_SESSION['userId'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uis');

$sql="select c.Course_Id,c.Course_Name 
from courses c, course_enrollment e, students s 
where e.User_Id = s.User_Id and e.Course_Id = c.Course_Id and s.User_Id = '$userId'";

$result = mysql_query($sql);

// $row = mysqli_num_rows(mysqli_query($con,$sql));
// $data = mysqli_fetch_array(mysqli_query($con,$sql));

    echo "<table>"; // start a table tag in the HTML
    
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td></tr>";  //$row['index'] the index here is a field name
    }
    
    echo "</table>"; //Close the table in HTML    

?>
</body>
</html>