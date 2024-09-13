<?php

$arr = array("a","b","c");
echo $arr[0]."<br>";
$arr1 = ["deep","shikha","anshi"];

define("courses",["PHP","HTML","CSS"]);

echo courses[0];

echo "<br>";

//................................................

$a = array("INT219" => "Front End Web", "INT220"=> "PHP", "INT221"=>"Laravel");
$b = array("INT222"=>"Node.js","CSE316"=>"Operating System");
$c = ($a+$b);
print_r($a);//for print array
echo "<br>";
var_dump($c);

echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);//it will check order equal or not
echo "<br>";
var_dump($a!=$b);
echo "<br>";
var_dump($a<>$b);// same as !=
echo "<br>";
var_dump($a!==$b);//it will check oreder 
echo "<br>";


//.....................................................


//Array_combine()

$name = array("Deepshu","Arjun","Ankur","Anshi");
$marks = array("75","89","44","63");
$c = array_combine($name,$marks);
print_r($c);
echo "<br>";


// associative array array("a"=>"red","b"=>"blue");

//Array_combine


$name = array("deepshu","Anshi","Arjun");
$marks = array("75","89","44");
$c = array_combine($name,$marks);
print_r($c);

//.......................................................

//array_chunk(array,size,preserve_key)
$courses = array("PHP", "Laraval","Node.js","HTML","CSS","ASP.NET","GHP", "LFHHGraval","Noooode.js","HjkhdhTML","CsldSS","AskhdjSP.NET");
print_r(array_chunk($courses,2));
echo "<br>";
$courses = array("a"=>"PHP", "b"=>"Laraval","c"=>"Node.js","d"=>"HTML","e"=>"CSS","f"=>"ASP.NET");
print_r(array_chunk($courses,2,true));
echo "<br>";


///..........................................................


//array_count_values(array).............. it will count how many times values came
$courses = array("Block 32","Block 32","Block 34","Block 35");
print_r(array_count_values($courses));


//............................................................


//array_diff()
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
$result=array_diff($a3,$a2);
print_r($result);
echo "<br>";

//............................................................


//array_flip
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_flip($a3);
print_r($result);
echo "<br>";
$a1=array("red","green","blue","yellow");
$result=array_flip($a1);
print_r($result);
echo "<br>";


//...................................................................


//array_intersect()
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
$result=array_intersect($a2,$a1,$a3);
print_r($result);
echo "<br>";

//................................................................


//array_merge()
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"red","i"=>"blue");
print_r(array_merge($a2,$a1,$a3));
echo "<br>";


//.....................................................................

//array_pop()
$a1=array("red","green","blue","yellow");
array_pop($a1);
print_r($a1);
echo "<br>";


//......................................................................


//array_push()
$a1=array("red","green");
array_push($a1,"blue","yellow");
print_r($a1);
echo "<br>";

//.......................................................................


//array_reverse()
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_reverse($a1));
echo "<br>";

//.........................................................................


//array_search(value,array,strict)
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_search("yellow",$a1));
echo "<br>";

$a = array("a"=>"1","b"=>1,"c"=>"1");
echo array_search(1,$a,true);
echo "<br>";

$largest = array(1,2,3,4,5,6,7,8,9,10);
sort($largest);
$n = count($largest);
echo $largest[$n-3];
echo "<br>";

$sum = array_sum($largest);
echo ($sum/$n);
echo "<br>";
$mid = $n/2;
echo $largest[ceil($mid)];
echo "<br>";

$a = array(1,1,2,3,5,4,5,6,2,3,4,5,6,7,8,9,10);
$b = array_unique($a);

print_r($b);
echo "<br>";

//.........................................................................


//array_slice(array,start,length,preserve)
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_slice($a,1,2));
echo "<br>";
$a=array("red","green","blue","yellow");
print_r(array_slice($a,1,2,true));
echo "<br>";

//.........................................................................


//array_column()
$result = array(
    array('name'=>'Manoj','cgpa'=>6.7,'status'=>'pass'),
    array('name'=>"Shalini",'cgpa'=>9.8,'status'=>'pass'),
    array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')
    );
    $names = array_column($result, 'status', 'name');
    print_r($names);
    echo "<br>";

//.........................................................................

echo phpversion(); 
echo "<br>";
?>