<?php
session_start();

?>

<html>
<title>Computer Science Dept</title>
<head>

<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

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

</body>


</html>
