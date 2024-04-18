<?php
function Login()
{
    if(empty($_POST['email']))
    {
        $this->HandleError("UserName is empty!");
        return false;}
    
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;}
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if(!$this->CheckLoginInDB($email,$password))
    {
        return false;}
    
    session_start();
    $_SESSION[$this->GetLoginSessionVar()] = $username;
    return true;
    }
    ?>
    
        