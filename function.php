<?php
/*
define("deep", "Good eveving");

function test(){
    echo deep;
}
test();
*/


//  A function is a self-contained block of code that performs a specific task.....

// PHP has a huge collection of internal or built-in function that you can call directly within your PHP scripts to perform a specific task.


function test(){
    echo "shekhar Rana";
}
test();
echo "<br>";

function add(int $a, int $b){
    echo $a + $b;
}
add(5,7);


echo "<br>";

function sem($a, $b){
    echo $a + $b;
}
sem(2,"3 semesters");

echo "<br>";

function selfmul(&$number){
    $number *= $number;
    return $number;
}

$mynum = 5;
echo $mynum;
echo "<br>";
selfmul($mynum);
echo $mynum;


/// Three types of variable scope 
// 1. global variale
// 2. local variable
// 3. Static varibale

?>