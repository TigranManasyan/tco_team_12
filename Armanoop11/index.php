<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

<?php if (isset($_POST) && !empty($_POST)) {
    $error = 1;

    if ($_POST['name'] = '') {
        $error = 0;
    }
    $mail = $_POST['email'];
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    }

    if ($error == 1) {
        $name = $_POST['name'];
        $headers = "From:$name <$mail>" . "\r\n";

        if (mail("yourmail@gmail.com", "$sbj, $msg, $headers")) {
            $sucmsg = "Thank you for Contact Us !!!";
        }
    }
} ?>


<section class="contact-us">
    <div class="success-msg">
        <?php if(isset($message) && $message!=''){?>
            <?=$message; ?>
        <?php } ?>
        <?php
        if(isset($sucmsg) && !empty($sucmsg)){
            echo $sucmsg;
        } ?>
    </div>

    <h1>Contact us</h1>
    <form action="" method="post">

        <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email" />
       <input type="password" class="form-control" id="password" placeholder="your password" >
        <button type="submit">Contact Now</button>
    </form>
</section>

</body>
</html>