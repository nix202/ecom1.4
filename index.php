<?php
$server= 'localhost';
$surname ='root';
$pwd ="";
$db="ecom1";
$conn=mysqli_connect($server,$surname,$pwd,$db);
if ($conn) {
    echo"connected to the $db database successfully";
    global $conn;

}
else{
    echo"error : Not connected to the $db database";
}