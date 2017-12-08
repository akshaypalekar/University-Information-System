

<html>
<title>NYIT</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div class = "a">

<form action="Add_Course_authen.php" method="get">
<table>
<tr>
<td> Course ID</td>
<td>
 <input type = "number" name = "courseid" required></td>
</tr>

<tr>
<td> Course Name</td>
<td>
<input type = "text" name = "cname" required></td> 
</tr>

<tr>
<td> Faculty ID</td>
<td>
<input type = "text" name = "faculty_id" required></td> 
</tr>
<tr>
<td> Course Description</td>
<td>
<input type = "text" name = "c_desc" required></td> 
</tr> 

<tr>
<td> Credits</td>
<td>
<input type = "text" name = "cred" required></td> 
</tr> 

<tr>
<td> Course Time</td>
<td>
<input type="time" name="time_start" >
</tr> 

<tr>
<td> Status</td>
<td>
<input type="radio" name="status" value="open"> Open
<input type="radio" name="status" value="closed"> Closed</td>
</tr>

<tr>
<td> Capacity</td>
<td>
<input type = "text" name = "cap" required></td> 
</tr> 


<tr>
<td> Course Level</td>
<td>
<input type="radio" name="course_level" value="graduate"> Graduate
<input type="radio" name="course_level" value="undergraduate"> Undergraduate</td> 
</tr>

<tr>
<td> Course Day</td>
<td>
<input type = "text" name = "cday" required></td> 
</tr> 

<tr>
<td> Time End</td>
<td>
<input type="time" name="time_end" >
</tr> 
</table> 

<button type="reset" value="Reset">Clear</button>
<button type="submit" name = "submit" value="Submit">Add</button>
</form>
</div>
</body>