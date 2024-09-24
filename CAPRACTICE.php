<?php
    $name = array("Deepshi","deesphiiii","Swati");
    $marks = array("99","45","54");
    $c = array_combine($name,$marks);
    print_r($c) ;
    echo "<br>";
    $try = array("1","2","3","4","5","9","6","8","7","9","10");
    print_r(array_chunk($try,2));
    echo "<br>";
    $a1=array("red","green","blue","yellow");
    $a2=array("red","green","blue");
    $a3=array("h"=>"magenta","i"=>"seagreen");
    $result=array_diff($a1,$a2);
    print_r($result);
    echo "<br>";
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
    $a1=array("red","green","blue","yellow");
    print_r(array_flip($a1));
    echo "<br>";
    $a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"green","e"=>"yellow");
$a3=array("f"=>"orange","b"=>"magenta");
print_r(array_merge($a1,$a2,$a3));
echo "<br>";
$a=array("a"=>"1","b"=>1,"c"=>"1");
echo array_search(1,$a,true);
echo "<br>";
/*
Key "a" has the value "1" (a string), which is not strictly equal to the integer 1.
Key "b" has the value 1 (an integer), which is strictly equal to the integer 1.
Key "c" has the value "1" (a string), which again is not strictly equal to the integer 1.
*/
$result = array(
    array('name'=>'Manoj','cgpa'=>6.7,'status'=>'pass'),
    array('name'=>"Shalini",'cgpa'=>9.8,'status'=>'pass'),
    array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')
    );

$name = array_column($result, 'name');
print_r($name);
echo "<br>";
$names = array_column($result, 'status', 'name');
print_r($names);
echo "<br>";
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
var_dump($x === $z); // Outputs: boolean false
var_dump($x != $y);  // Outputs: boolean true
var_dump($x !== $z); // Outputs: boolean true
var_dump($x < $y);   // Outputs: boolean true
var_dump($x > $y);   // Outputs: boolean false
var_dump($x <= $y);  // Outputs: boolean true
var_dump($x >= $y);  // Outputs: boolean false
echo "<br>";
$ifelse = date("D");
if($ifelse == 'Fri'){
    echo "Wow today is nice day";
}else{
    echo "Should not be nervous";
}
echo "<br>";
$d = date("D");
if($d == "Mon"){
    echo "Have a nice weekend!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
}
echo "<br>";
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";
$superhero = array(
    "name" => "Deepshikha Pal",
    "email" => "paldeepshi123@mail.com",
    "age" => 21
);
 
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key . " : " . $value . "<br>";
}

echo "<br>";

$result = array(
    array("Manoj",7.8,"pass"),
    array("Aditya",8.5,"pass"),
    array("Anuj",4.9,"fail")
);
echo $result[0][0]. "----CGPA is: " . $result[0][1]." and his status is ".$result[0][2]."<br>";
echo $result[1][0]. "----CGPA is: " . $result[1][1]." and his status is ".$result[1][2]."<br>";
echo $result[2][0]. "----CGPA is: "  . $result[2][1]." and his status is ".$result[2][2];

echo "<br>";
$result = array (

array("Manoj",7.8,"pass"),
array("Aditya",8.5,"pass"),
array("Anuj",4.9,"fail"));
  
for ($row = 0; $row < 3; $row++) {
echo "<h4>Row number $row</h4>";
for ($col = 0; $col < 3; $col++) {
  echo $result[$row][$col]."<br>";
}
}



?>