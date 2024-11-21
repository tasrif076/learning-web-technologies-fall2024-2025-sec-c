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
    }
    else 
    {
        $isValid = true;
        for ($i = 0; $i < strlen($name); $i++) 
        {
            $char = $name[$i];
            if (!(ctype_alpha($char) || $char == '.' || $char == '-' || $char == ' ')) 
            {
                $isValid = false;
                break;
            }
        }

        if (!$isValid) 
        {
            echo "Name can contain a-z, A-Z, period, and dash only!";
        } 
        else 
        {
            echo "Name is valid!";
        }
    }
} 
else 
{
    header('location: Name.html');
}
?>
