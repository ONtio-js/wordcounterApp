<?php
require '../classes/dbconnect.class.php';
require_once '../classes/user.class.php';
if (isset($_POST['button']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST)){
        $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $password = trim($_POST['pwd']);
        $rpassword = filter_var($_POST['rpwd'],FILTER_SANITIZE_SPECIAL_CHARS);
        $register = new Register();
        $register->validate_user($email,$password,$rpassword);
        $register->register_user($email,$password,$rpassword);
        ?>
        <script>
            window.location.href = "../sign-in.php";
        </script>
    <?php

     
       
  
    
    }
    else{
        echo 'input your datas';
    }
}
else{
    echo "hello";
}