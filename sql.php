<?php 
$servername='localhost';
$username='root';
$password='';
$database ="k22test";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!($conn)){
    die ("Unsuccessful".mysqli_connect_error());
}else{
echo "Connection Successful";
}
// $sql="CREATE DATABASE k22test";
// mysqli_query($conn,$sql);

?>