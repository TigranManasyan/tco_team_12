<?php session_start(); ?>
<!DOCTYPE html>
<html lang = "en-US" dir = "ltr">
<head>
    <title>Home</title>
    <meta charset = "UTF-8"/>
</head>
<body>
<form method="POST" action="server.php">
    <input type="text" name="e_mail" placeholder="email">
    <span><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : '' ?></span>
    <input type="submit" name="click">
</form>



</body>
</html>

