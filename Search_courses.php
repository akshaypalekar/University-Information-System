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
<div class="search_course">
<form action="Courses.php" method="get">
<table>
<tr>
<td> Course Number</td>
<td>
<select>
<option value="contains_only">contains only</option>
<option value="greater">greater than or equal to</option></select> </td>
<td> <input type = "number" placeholder="Course Number"required></td> 
</tr> <br> <br>
<tr>
<td> Course Career</td>
<td><select>
<option value="graduate">Graduate</option>
<option value="undergraduate">Undergraduate</option></select> </td>
</tr> <br> <br>
</table> <br><br>
<button type="reset" value="Reset">Clear</button>
<button type="submit" value="Submit">Search</button>
</form>
</div>
</body>
</html>

