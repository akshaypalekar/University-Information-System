<!DOCTYPE html>

<html>
<title>Computer Science Dept</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="Js/script.js"></script>
</head>
<body background="Images/nyit_bg.jpg" style ="background-size: 100%;">
<div class="manage_password">
 <div class="thumbnail"><img src="Images/nyit_loginbox.png"/></div>
<form method="post" action="Manage_password_authen.php">

<?php
session_start();
echo "User ID ".$_SESSION['newuser_id'];
?>

<table>
<tr><td>Password </td>
<td><input type = "text" name = "password" id = "password" onblur="javascript:checkPassword()" required> </td></tr>

<tr><td>Confirm Password </td>
<td><input type = "text" name = "cpassword" id = "cpassword" onblur="javascript:checkPassword()" required> </td></tr>

<tr><td>Select a Security Question </td>
<td>
<select name = "security_question" id = "security_question"> 
    <option>Please select a question</option>
    <option value="1">What is your Favourite Color?</option>
    <option value="2">What is your Favourite Car Model?</option>
</select>

</td></tr>

<tr><td>Enter a Security Answer </td>
<td><input type = "text" name = "security_answer" id = "security_answer"> </td></tr>
</table> <br> <br>

<button type="submit">Submit</button>
</div>
</form>
</div>
</body>

</html>