<?php
session_start();

if (isset($_REQUEST['submit'])) 
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == null || $password == null) 
    {
        echo "Null username/password!";
    } 
    
    else 
    {
        if (!isset($_SESSION['users'])) 
        {
            $_SESSION['users'] = [];
        }
        
        
        else 
        {
            $_SESSION['users'][$username] = $password;
            header('Location: login.html'); 
            exit();
        }
    }
} 

else 
{
    echo "Invalid Registration!";
}
?>
