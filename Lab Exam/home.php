<?php
session_start();

if (isset($_SESSION['users'])) 
{

    echo "<h1>Welcome Home!</h1> <br>";
    echo "User Name : <br>";
    echo "Password : <br>";
    echo "<a href='logout.php'>Logout</a>";
} 

else 
{
    echo "Error";
}
?>
