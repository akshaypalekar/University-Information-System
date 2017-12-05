<?php
    session_start();
    $contains = $_POST['contains'];
    echo $contains;
    $course_num = $_POST['course_num'];
    echo $course_num;
    $course_career = $_POST['course_career'];
    echo $course_career;
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'uis');

    if($contains==1){
    $sql="SELECT * FROM courses WHERE Course_Id = '$course_num'";
    $result = mysqli_query($con,$sql);
    echo "<table class='search_table'>";
    while($row = mysqli_fetch_array($result)){
    echo "<tr><th>Course ID</th><th>Course Name</th><th>Day</th><th>Timing</th></tr><tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Day'] . "</td><td>". $row['Course_Time'] ."-".$row['Time_End'] . "</td></tr>";  
    }
    echo "</table>";

    }else{
        $sql="SELECT * FROM courses WHERE Course_Id > '$course_num'";
        $result = mysqli_query($con,$sql);
        echo "<table class='search_table'>";
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><th>Course ID</th><th>Course Name</th><th>Day</th><th>Timing</th></tr><tr><td>" . $row['Course_Id'] . "</td><td>" . $row['Course_Name'] . "</td><td>". $row['Course_Day'] . "</td><td>". $row['Course_Time'] ."-".$row['Time_End'] . "</td></tr>";  
        }
        echo "</table>";
    }
    ?>