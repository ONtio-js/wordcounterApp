<?php
if (isset($_POST['button']))
{
    //grabbibg data

    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['pwd'],FILTER_SANITIZE_SPECIAL_CHARS);
    $rpassword = filter_var($_POST['rpwd'],FILTER_SANITIZE_SPECIAL_CHARS);

    //instantiate signupcontr class
    include "../classes/dbconnect.class.php";
    include "../classes/user.class.php";
    include "../classes/usercontr.class.php";
    $signup = new Signcontr($email,$password,$rpassword);
    //running error handler and user signup
    $signup->signupuser();
    //going to index page
}