<?php
include('../partials/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newprice=$_POST['price'];
	$newdesc=$_POST['description'];
	$newcat=$_POST['category'];


$target="uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="uploads/".$file_name;

move_uploaded_file($file_tmp, $file_store);


$sql="UPDATE product set product_name='$newname', product_price='$newprice', product_description='$newdesc', catagory_id='$newcat', product_image='$file_path' where product_id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: productsshow.php');
}else{
	header('location: adminindex.php');
}


}








?>