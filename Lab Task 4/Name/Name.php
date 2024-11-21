<?php
session_start();

if (isset($_REQUEST['submit'])) 
{
    $name = trim($_POST['name']);

    if ($name == null) 
    {
        echo "Name cannot be empty!";
    } 
   
    elseif (str_word_count($name) < 2) 
    {
        echo "Name must contain at least two words!";
    } 

    elseif (!(ctype_alpha($name[0]))) 
    {
        echo "Name must start with a letter!";
        $isValid = false;
    }

} 
 else 
 {
    header('location: Name.html');
 }



?>
