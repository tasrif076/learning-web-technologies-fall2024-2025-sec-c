<?php
session_start();

if (isset($_REQUEST['submit'])) 
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == null || $password == null) {
        echo "Null username/password!";
    } 
    
    else 
    {
       
        if (isset($_SESSION['users'][$username])) 
        {
         
            if ($_SESSION['users'][$username] === $password) 
            {
                echo "Login successful! Welcome, $username.";

               
                header('Location: home.php');
                exit();
            } 
            
            else {
                echo "Invalid password!";
            }
        } 
        
        else {
            echo "Username not found!";
        }
    }

} 

else 
{
    echo "Invalid ";
}
?>
