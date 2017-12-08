
<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['faculty_added'])){
        echo "<script type='text/javascript'>alert('Faculty Added');</script>";
        unset($_SESSION['faculty_added']);        
}
?>
<html>
<title>NYIT</title>
<head>
<?php include 'Admin_Header.php' ?>
<?php include 'Admin_Sidebar.php' ?>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div class = "add_faculty">

<form action="Add_Faculty_authen.php" method="post">
<table>
<tr>
<td> User ID</td>
<td>
 <input type = "number" name = "userid" required></td>
</tr>

<tr>
<td> First Name</td>
<td>
<input type = "text" name = "fname" required></td> 
</tr>

<tr>
<td> Last Name</td>
<td>
<input type = "text" name = "lname" required></td> 
</tr>
<tr>
<td> Username</td>
<td>
<input type = "text" name = "uname" required></td> 
</tr> 

<tr>
<td> Speciality</td>
<td>
<input type = "text" name = "speciality" required></td> 
</tr> 

<tr>
<td> Date of Birth</td>
<td>
<input type = "date" name = "dob" required></td> 
</tr> 

</table> 

<button type="reset" value="Reset">Clear</button>
<button type="submit" name = "submit" value="Submit">Add</button>
</form>
</div>
</body>