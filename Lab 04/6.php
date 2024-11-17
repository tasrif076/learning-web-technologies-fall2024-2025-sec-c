<?php

$elements = array(11,32,65,6,87,2,7,98);
$search = 32;
$found = false;

for ($i = 0; $i <= 8; $i++) 
{
    if ($elements[$i] == $search) 
    {
        echo "$search"." found .";
        $found= true;
        break;
        
    }
}

if($found == false)
{
    echo "$search"." not found .";
}

?>
