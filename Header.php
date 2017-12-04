<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <div class="header_container">
            <?php 
            echo $_SESSION['name'];
            ?>
        </div>
    </body>
</html>