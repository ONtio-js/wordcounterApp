<?php
require_once 'dbconnect.class.php';
class Register extends Database
{

    public function validate_user($email,$password,$rpassword)
    {
        if ($password === $rpassword){
            $stmt = "SELECT *
                    FROM users
                    WHERE email = :email";
            $stmt = $this->connect->prepare($stmt);
            $stmt->bindParam(':email',$email);
            $stmt->execute();
            if ($stmt->rowCount() > 0){
                 ?>
                 <script>
                    alert("Email already in use");
                     window.location.href = "../sign-up.php";
                 </script>
             <?php
            }
        }
        else
        {
            ?>
            <script>
                alert("password mismatch");
                window.location.href = "../sign-up.php";
            </script>
        <?php
        }
       
    }
    private function generate_customer_id()
    {
        $customer_id =  "CUST".rand(100,1000);
        return $customer_id;
    }
    private function generate_account_no()
    {
        $account = "XOXO".rand(100000,999999999);
        return $account;
    }
    public function register_user($email,$password)
    {
        $customer_id = $this->generate_customer_id();
        $account = $this->generate_account_no();
        $password = password_hash($password,PASSWORD_DEFAULT);
        $stmt ="INSERT INTO users (email,pasword,customer_id,account_no)
        VALUES (:email,:password,:customer_id,:account_no)";
        $stmt = $this->connect->prepare($stmt);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':customer_id',$customer_id);
        $stmt->bindParam(':account_no',$account);
        try {
            $stmt->execute();
        } catch (PDOexception $e) {
            echo "Error".$e->getMessage();
        }
    }

}

class Login extends Database
{
    public function login_data($customer_id,$password)
    {
        $stmt = "SELECT *
                FROM users 
                WHERE customer_id = :customer_id";
        $stmt = $this->connect->prepare($stmt);
        $stmt->bindParam('customer_id',$customer_id);
        $stmt->execute();
        if ($stmt->rowCount() == 1)
        {
           $customer_id = $stmt->fetch(PDO::FETCH_ASSOC);
           if (password_verify($password,$customer_id['pasword']))
           {
            $_SESSION['customer'] = $customer_id['customer_id'];
            $_SESSION['account_no'] = $customer_id['account_no'];
            $_SESSION['email'] = $customer_id['email'];
           ?>
           <script>
            window.location.href = "../index.php";
           </script>
           <?php
                 return $_SESSION['customer'];
           }
           else{
                ?>
                <script>
                    alert("User not found");
                    window.location.href = "../sign-in.php";
                </script>
                <?php
           }
        }
        else{
            ?>
            <script>
                alert("User not found");
                window.location.href = "../sign-in.php";
            </script>
            <?php
        }
    }
}

class Wordcount
{
    public function wordcount($words):int
    {
        $totalwords = str_word_count($words);
        return $totalwords;
    }

    public function charcount($words):int
    {
        $totalchars = strlen($words);
        return $totalchars;
    }
    public function charwithoutspecialchars($words)
    {
        $wordnmuber = str_replace(" ","",$words);
        return strlen($wordnmuber);
    }
}