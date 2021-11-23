<?php 
if(isset($_POST["check"])){
    $email = $_POST["E-mail"];
    $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
    if(preg_match($pattern, $email)){
        $msg = "jisht e";
    } else{
        $msg = "porceq krkin";
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
    <title>PHP-RegExp</title>
</head>
<body>
<form method="post">
    <label>email</label>
    <input type="text" name="E-mail"><?php if(isset($msg)){ echo $msg; } ?> <br>
    <button name="check" style="margin-top:10px; border-radius:5px;">CHECKOUT</button> 

    <?php
    echo "<h2>Your Email</h2>";
    echo $email;
    ?>
</form>
</body>
</html>