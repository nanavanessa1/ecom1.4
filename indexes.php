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