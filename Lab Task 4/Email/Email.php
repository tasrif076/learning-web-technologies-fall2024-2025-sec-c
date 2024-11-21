<?php
if (isset($_POST['submit'])) 
{
    $email = trim($_POST['email']); 

    if ($email == null) 
    {
        echo "Email cannot be empty!";
    } 
   
    else 
    {
        $atPos = strpos($email, '@');
        $dotPos = strrpos($email, '.');
        
        if ($atPos === false || $dotPos === false || $atPos > $dotPos || $atPos === 0 || $dotPos === strlen($email) - 1) 
        {
            echo "Invalid email format!";
        } 
        else {
            echo "Email is valid!";
        }
    }
} 
else 
{
    header('location: Email.html');
}
?>
