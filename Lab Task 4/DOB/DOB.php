<?php
if (isset($_POST['submit'])) 
{
    $day = trim($_POST['day']);
    $month = trim($_POST['month']);
    $year = trim($_POST['year']);

    if ($day === "" || $month === "" || $year === "") 
    {
        echo "All fields (dd, mm, yyyy) must be filled!";
    } 

    elseif (!ctype_digit($day) || !ctype_digit($month) || !ctype_digit($year)) 
    {
        echo "Date of Birth must contain valid numbers only!";
    } 

    elseif ($day < 1 || $day > 31) 
    {
        echo "Day (dd) must be between 1 and 31!";
    }

    elseif ($month < 1 || $month > 12) 
    {
        echo "Month (mm) must be between 1 and 12!";
    }

    elseif ($year < 1953 || $year > 1998) 
    {
        echo "Year (yyyy) must be between 1953 and 1998!";
    } 

    else 
    {
        echo "Date of Birth is valid ";
    }
} 

else 
{
    header('location: DOB.html');
}
?>
