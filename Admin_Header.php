<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <div class="header_container">
            <span class="user_name">
                <?php echo $_SESSION['admin_name']."'s Control Center";?>
            </span>
<script type="text/javascript">
document.write ('<span class="date_time">', new Date().toLocaleString(), '<\/span><\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
}
</script>
</div>
    </body>
</html>