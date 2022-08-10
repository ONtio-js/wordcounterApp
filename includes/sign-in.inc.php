<?php
require '../classes/dbconnect.class.php';
require_once '../classes/user.class.php';
if (isset($_POST['button']) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!empty($_POST))
    {
        $customer_id = stripslashes($_POST['customer_id']);
        $password = stripslashes($_POST['pwd']);
        $login = new Login();
        $login->login_data($customer_id,$password);
    }

}