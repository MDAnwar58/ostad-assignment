<?php

// You can use the usort() function to define a custom sorting function.
function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b) ? "Data Is Not Found" : "Rabbile vai";
}

$a=array("Rabbile vai", "Hasin haidar vai", "foysal vai", "Rakibul vai");
$result = usort($a,"my_sort");

echo $result; // output : 1


// Write a PHP function to concatenate two strings
function concatenate($f_string, $l_string)
{
    $string = $f_string." ".$l_string;
    echo "$string \n"; // output : Hello World!
}
concatenate("Hello", "World!");

// remove last and first array
$sports = array("Baseball", "Cricket", "Football", "Shooting");
 
$l_array_removed = array_pop($sports);
$f_array_removed = array_shift($sports);
print_r($sports); // output : Array ([0] => Cricket [1] => Football)



// Write a PHP function to check if a string contains only letters and whitespace.
function check($strings)
{
    echo strlen($strings);
}

check("Hello world!"); // output 12

// Write a PHP function to find the second largest number in an array of numbers.
function secondHighest(array $array) {
    
    sort($array);
    
    echo $array[sizeof($array)-2];
}
 
 
secondHighest(array(0, 4, 1, 15, 3, 10)); // output 10



