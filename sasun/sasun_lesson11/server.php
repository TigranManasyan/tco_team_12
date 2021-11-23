<?php
session_start();
include "emailValidation.php";

$msg = emailValidation::validEmail($_POST['e_mail']);

if (!empty($msg)) {
    $_SESSION['error'] = $msg;

    header('Location: index.php');
}
