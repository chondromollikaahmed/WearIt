<?php

$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$connect = mysqli_connect($servername, $username, $password);
// Check connection
if (!$connect) {
die("Connection failed: " . mysqli_connect_error());
}



try{
    $connect = mysqli_connect($servername, $username,
    $password, "wearit");        
}
catch(Exception $e)
{
        $sql = "CREATE DATABASE wearit";
            try{
            mysqli_query($conn, $sql);
            $conn = mysqli_connect($servername, $username,
$password, "wearit");
            } 
            catch(Exception $e) {
            }   
}





?>



