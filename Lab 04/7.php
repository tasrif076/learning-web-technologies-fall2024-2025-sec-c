<?php
$rows = 3;
$char = 'A';

for ($i = 1; $i <= $rows; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "*";
    }
    echo "\n"; 
}

echo "\n";
echo "\n";


for ($i = 1; $i <= $rows; $i++) 
{
    for ($j = 1; $j <= $rows - $i + 1; $j++) 
    {
        echo $j;
    }
    echo "\n";
}

echo "\n";
echo "\n";

for ($i = 1; $i <= $rows; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo $char ;  
        $char++; 
    }
    echo "\n";
}

?>
