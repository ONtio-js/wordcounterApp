<?php

class Signcontr extends signup
{
    public $email;
    public $password;
    public $rpassword;

    public function __construct($email,$password,$rpassword)
    {
        $this->email = $email;
        $this->password = $password;
        $this->rpassword = $rpassword;
    }

    public function signupuser()
    {
        if ($this->emptyinput() == array(0))
        {

        }
        if ($this->checkpassword() == array(0))
        {
            
        }
        if ($this->passwordmatch() == array(0))
        {
            
        }
        if ($this->usercheck() == array(0))
        {
            
        }
        $this->setuser($this->email,$this->password);
    }
    public function emptyinput()
    {
        if (empty($this->email) || empty($this->password) || empty($this->rpassword))
        {
          return  array('status'=>0,'message'=>'input your details');
        }
        else
        {
            return  array('status'=>1,'message'=>'input filled correctly');
        }
    }
    public function checkpassword()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/",$this->password))
        {
            return (array('status'=>0,'message'=>'invalid password type'));
        }
    }
    public function passwordmatch()
    {
        if ($this->password !== $this->rpassword)
        {
            return (array('status'=>0,'message'=>'password mismatch'));
        }
    }

    public function usercheck()
    {
        if (!$this->checkuser($this->email))
        {
            return (array('status'=>0,'message'=>'password mismatch'));
        }
    }
}