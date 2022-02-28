<?php
include("../partials/connect.php");
$category=$_POST['name'];

$sql="INSERT INTO catagory(catagory_name) VALUES('$category')";

$connect->query($sql);
header('location: productsshow.php');

?>