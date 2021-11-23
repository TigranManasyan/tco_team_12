<?php


class emailValidation
{
    public static function validEmail($email)
    {
        $error = '';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format";
        }

        return $error;
    }
}