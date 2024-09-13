<?php echo 'Heloooo<br>'; echo 'helllooooo'."is"."hdifd <br>"?> 
<?php echo 'hel','sd','oooooo<br>' ?>
<?= 'helllllllooooo<br>' ?>
<?php 
$a = 10;
$b = 5;

echo "$a + $b<br>"; echo $a+$b."<br>"; echo $a.$b."<br>";


$c = 23;
echo gettype($c)."<br>";
$m = (9<5);
echo gettype($m)."<br>";
$var = NULL;
echo gettype($var)."<br>";
define("deep", 12);
echo deep."<br>";
echo gettype("deep")."<br>";
const d = 10;
echo d."<br>";
#operator.....................
$x = 10;
$y = 35;
$z = "25";
echo ($x == $z)."<br>";
#$y = "Hello World";
var_dump($y)."<br>";
echo $x++."<br>";
echo ++$x."<br>";

#Null coalescing operator.......................

$papa = $mumma ?? "deepu";
echo $papa."<br>";
$mumma = "pallll";
$papa = $mumma ?? "deepu";
echo $papa."<br>";

#logical operator..................
$x = 10;
$y = 8;

echo ($x & $y)."<br>";
echo ($x|$y)."<br>";
echo ($x ^ $y)."<br>"; # in place of xor operator we can use this ^ 

#control statement..................
$d = date("D");
if($d == "Thu"){
    echo "It's friday! <br>";
}else{
    echo "Not saturday <br>";
}


#switch case.... 
$a = 10;
Switch($a){
    case 10;
    echo "first<br>";
    break;
    case 20;
    echo "second<br>";
    break;
    default:
    case 30;
    echo "third<br>";
}
?>