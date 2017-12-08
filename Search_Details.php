<!DOCTYPE html>
<?php
session_start();
?>

<html>
<title>NYIT</title>
<head>
<?php include 'Admin_Header.php' ?>
<?php //include 'Admin_Sidebar.php' ?>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div class="search_details">
    <form action = "" method = "post">
<table>
    <tr>
        <td>
<select name = "contains">
  <option value="1">Courses</option>
  <option value="2">Faculty</option>
  <option value="3">Student</option>
</select></td>

<td> ID <input type = "number" name = "userid"> </td>
<td> <button type="submit" name = "submit" value="Submit">Submit</button> </td></tr>
</table>
</div>

<div class = "">
    <?php
      $id = (isset($_POST['userid']) ? $_POST['userid'] : null);
      $contains = (isset($_POST['contains']) ? $_POST['contains'] : null);

      $con=mysqli_connect('localhost','root','');
      mysqli_select_db($con,'uis');
     
      if($id==0){
          if($contains == 1){
           $sql = "SELECT * FROM courses";
           $result = mysqli_query($con,$sql);

           echo "<table class='search_table'><tr><th>Course ID</th><th>Course Name</th></tr>";
           while($row = mysqli_fetch_array($result)){
           echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td><a href='delete_course.php?Course_Id=".$row['Course_Id']."'>Delete</a></td></tr>";  
           }
           echo "</table>";

          }elseif($contains == 2){

            $sql = "SELECT * FROM faculty";
            $result = mysqli_query($con,$sql);
 
            echo "<table  class='search_table'><tr><th>Faculty ID</th><th>Faculty Name</th></tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['User_Id'] . "</td><td>" . $row['First_Name'] . "</td><td><a href='delete_course.php?User_Id=".$row['User_Id']."'>Delete</a></td></tr>";  
            }
            echo "</table>";

          }elseif($contains == 3){

            $sql = "SELECT * FROM students";
            $result = mysqli_query($con,$sql);
 
            echo "<table class='search_table'><tr><th>Student ID</th><th>Student Name</th></tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['User_Id'] . "</td><td>" . $row['First_Name'] . "</td><td><a href='delete_course.php?User_Id=".$row['User_Id']."'>Delete</a></td></tr>";  
            }
            echo "</table>";
            
          }  
      }else{
        if($contains == 1){

            $sql = "SELECT * FROM courses WHERE Course_Id = '$id'";
            $result = mysqli_query($con,$sql);
 
            echo "<table class='search_table'><tr><th>Course ID</th><th>Course Name</th></tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td><a href='delete_course.php?Course_Id=".$row['Course_Id']."'>Delete</a></td></tr>";  
            }
            echo "</table>";
            
        }elseif($contains == 2){

            $sql = "SELECT * FROM faculty WHERE User_Id = '$id'";
            $result = mysqli_query($con,$sql);
 
            echo "<table class='search_table'><tr><th>Faculty ID</th><th>Faculty Name</th></tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['User_Id'] . "</td><td>" . $row['First_Name'] . "</td><td><a href='delete_course.php?User_Id=".$row['User_Id']."'>Delete</a></td></tr>";  
            }
            echo "</table>";
            
        }elseif($contains == 3){

            $sql = "SELECT * FROM students WHERE User_Id = '$id'";
            $result = mysqli_query($con,$sql);
 
            echo "<table class='search_table'><tr><th>Student ID</th><th>Student Name</th></tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr><td>" . $row['User_Id'] . "</td><td>" . $row['First_Name'] . "</td><td><a href='delete_course.php?User_Id=".$row['User_Id']."'>Delete</a></td></tr>";  
            }
            echo "</table>";
                        
        } 
      }

    ?>


    </form>
</div>
</body>
</html>