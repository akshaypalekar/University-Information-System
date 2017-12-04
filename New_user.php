<?php
session_start();
?>

<html>
<title>Computer Science Dept</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<form method="post" action="New_user_authen.php">
<label> Please enter your ID Number and Last Name </label><br> <br>
<table>
<tr><td>User Id </td><td><input type = "text" name = "uid" id = "uid"> </td></tr>
<tr><td>Last Name </td><td><input type = "text" name = "lname" id = "lname"> </td></tr>
</table> <br> <br>
<button type="submit">Manage Password</button>

</form>

</body>

</html>