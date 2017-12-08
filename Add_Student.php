
<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['student_added'])){
    echo "<script type='text/javascript'>alert('Student Added');</script>";
    unset($_SESSION['student_added']);        
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

<div class = "add_student">

<form action="Add_Student_authen.php" method="post">
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
<td> Address</td>
<td>
<input type = "text" name = "addr" required></td> 
</tr> 

<tr>
<td> Username</td>
<td>
<input type = "text" name = "uname" required></td> 
</tr> 

<tr>
<td> Contact Info</td>
<td>
<input type = "number" name = "cont" required></td> 
</tr> 

<tr>
<td> Emergency Contact</td>
<td>
<input type = "number" name = "emer" required></td> 
</tr> 

<tr>
<td> Major</td>
<td>
<input type = "text" name = "major" required></td> 
</tr> 

<tr>
<td> Course Career</td>
<td>
<input type="radio" name="course_career" value="graduate"> Graduate
<input type="radio" name="course_career" value="undergraduate"> Undergraduate</td> 
</tr> 

<tr>
<td> Total Credits Needed</td>
<td>
<input type="radio" name="credits" value="graduate_credit"> 30
<input type="radio" name="credits" value="undergraduate_credit"> 40</td>
</tr>
<tr><td></td>
<td>Graduate Credits = 30, Undergraduate Credits = 40</td></tr>


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