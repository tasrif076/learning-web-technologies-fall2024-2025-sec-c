<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['degree']) && is_array($_POST['degree'])) 
    {
        $selectedDegrees = $_POST['degree'];

        if (count($selectedDegrees) >= 2) 
        {
            echo "Correct Degree Selection!";
        } 
        
        else 
        {
            echo "Please select at least two degrees!";
        }
    } 
    
    else 
    {
        echo "Please select at least two degrees!";
    }
} 

else 
{
    header('location: Degree.html');
}
?>
