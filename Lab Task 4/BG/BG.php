<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['bloodGroup']) && $_POST['bloodGroup'] !== "") 
    {
        $bloodGroup = $_POST['bloodGroup'];
        echo "You have selected: $bloodGroup";
    } 
    
    else 
    {
        echo "Please select a blood group!";
    }
} 

else 
{
    header('location: BloodGroup.html');
}
?>
