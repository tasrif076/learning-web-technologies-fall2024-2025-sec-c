<?php
if (isset($_POST['submit'])) 
{
    if (isset($_POST['gender'])) 
    {
        $gender = $_POST['gender'];
        echo "Gender selected: $gender";
    } 
    
    else 
    {
        echo "Please select at least one gender option!";
    }
} 
else 
{
    header('location: Gender.html');
}
?>
