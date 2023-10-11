<?php
$server="localhost";
$userName="root";
$pwd="";
$db ="ecom1";

$conn=mysqli_connect($server,$userName,$pwd,$db);
if($conn){
    echo"connected to the $db database sucessfully";
    global $conn;
}
else{
    echo"Error:Not connected to the $db dadtabase";
}
$result1=mysqli_query($conn,"SELECT * FROM user where id=2");
$data1= mysqli_fetch_row($result1);
echo"</br>";
echo"<h2><b>premier fetch<b></h2>";

var_dump($result1);
echo"</br>";
var_dump($data1);
echo"<h2><b>Deuxieme partie<b></h2>";
$result2=mysqli_query($conn,"SELECT * FROM user where id=1");
$data2= mysqli_fetch_assoc($result2);
echo"</br>";
echo"<h2><b>Second fetch<b></h2>";

var_dump($result2);
echo"</br>";
var_dump($data2);
$result3=mysqli_query($conn,"SELECT user_name,email, id FROM user WHERE id=1");
$data3= mysqli_fetch_assoc($result3);
echo"</br>";
echo"<h2><b>Third fetch<b></h2>";
var_dump($result3);
var_dump($data3);