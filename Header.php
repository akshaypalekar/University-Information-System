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
            <span class="user_name">
                <?php echo $_SESSION['name']."'s Student Center";?>
            </span>
<script type="text/javascript">
document.write ('<span class="date_time">', new Date().toLocaleString(), '<\/span><\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
}
</script>
    </body>
</html>