<?php

$Two_D = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

$rows = sizeof($Two_D); 
for ($i = 0; $i < $rows; $i++) 
{
    $cols = sizeof($Two_D[$i]); 
    for ($j = 0; $j < $cols; $j++) 
    {
        if (is_numeric($Two_D[$i][$j])) 
        {
            echo $Two_D[$i][$j];
        } 
        else 
        {
            break; 
        }
    }
    echo "\n";
}

echo "\n";

for ($i = 0; $i < $rows; $i++) 
{
    $cols = sizeof($Two_D[$i]); 
    for ($j = 0; $j < $cols; $j++) 
    {
        if (is_string($Two_D[$i][$j])) 
        {
            echo $Two_D[$i][$j];
        }
    }
    echo "\n"; 
}
?>
