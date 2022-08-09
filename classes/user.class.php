<?php
// include "../classes/dbconnect.class.php";
class signup extends Db
{
    protected function checkuser($email)
    {
        $sql = "SELECT * FROM users WHERE email =?";
        $stmt = $this->connect->prepare($sql);
        $exec = $stmt->execute(array($email));
        if(!$exec)
        {
            $stmt = NULL;
            header("LOCATION:../sign-up.php?error=stmtfailed");
            exit();
        }
        $resultcheck = NULL;
        if ($stmt->rowCount() > 0)
        {
            $resultcheck = false;
        }
        else
        {
            $resultcheck = true;
        }
        return $resultcheck;
    }

    protected function setuser($email,$password)
    {
        $sql = "INSERT INT  users(email,password) VALUES (? ,?)";
        $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
        $stmt = $this->connect->prepare($sql);
        $exec = $stmt->execute(array($email,$hashedpassword));
        if(!$exec)
        {
            $stmt = NULL;
            header("LOCATION:../sign-in.php?error=stmtfailed");
            exit();
        }
        
    }
}







































// require_once 'dbconnect.class.php';
// class Superuser extends Db
// {
    // public $email;
    // public $password;
    // public $customer_id;
    // public $account_no;

    // public function __construct($email,$password,$customer_id,$account_no)
    // {
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->customer_id = $customer_id;
    //     $this->account_no = $account_no;
    // }
    // public function fetchdata()
    // {
    //     $stmt = "SELECT * FROM  users WHERE $this->email = ':email";
    //     $stmt = $this->connect->prepare($stmt);
    //     $ex = $stmt->execute(array(':email'=>$this->email));
    //     if ($stmt->rowCount() > 0)
    //     {
    //         return (array('status'=>0));
    //     }
    //     else
    //     {
    //         return (array('status'=> 1));
    //     }
    // } 
    // public function insertdata()
    // {
    //     $stmt = "INSERT INTO Users(customer_id,email,password,account_no) VALUES (':customer_id',':email',':password',':account_no')";
    //     $stmt = $this->connect->prepare($stmt);
    //     $exec = $stmt->execute(array(':customer_id'=>$this->customer_id,':email'=>$this->email,':password'=>$this->password,':account_no'=>$this->account_no));
    //     if ($exec)
    //     {
    //         return (array('status'=> 1,'message'=>'user registered successfully'));
    //     }
    //     else
    //     {
    //         return (array('status'=> 0,'message'=>'error occured'));
    //     }
   // }
    // public function updatedata()
    // {
    //     $stmt = "UPDATE users SET password = ':password' WHERE email = ':email'";
    //     $stmt = $this->connect->prepare($stmt);
    //     $exec = $stmt->execute(array(':password'=>$this->password,':email'=>$this->email));
    //     if ($exec)
    //     {
    //         return (array('status'=> 1,'message'=>'user dtails updated successfully'));
    //     }
    //     else
    //     {
    //         return (array('status'=> 0,'message'=>'error occured'));
    //     }
    // }
    // public function deletedata()
    // {
    //     $stmt = "DELETE FROM users WHERE email = ':email'";
    //     $stmt = $this->connect->prepare($stmt);
    //     $exec = $stmt->execute(array(':email'=>$this->email));
    //     if($exec)
    //     {
    //         return(array('status'=> 1,'message'=>'user deleted successfully'));
    //     }
    //     else
    //     {
    //         return (array('status'=> 0,'message'=>'error occured'));
    //     }

    // }
//}