<?php 
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
    if(preg_match($pattern, $email)){
        $msg = "correct email";
    } else{
        $msg = "incorrect email";
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regex</title>
</head>
<body>
<form method="post">
    <label>email</label>
    <input type="text" name="email"><?php if(isset($msg)){ echo $msg; } ?> <br>
    <input type="submit" name="submit"> 

    <?php
    echo "<h2>Your Email</h2>";
    echo $email;
    ?>
</form>
</body>
</html>