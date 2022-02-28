<?php 

$servername = "localhost";
$username = "root";
$password = "";




$conn = mysqli_connect($servername, $username, $password, "wearit");

function CreateTable($conn, $createTableQuery)
{
    try 
    {
        mysqli_query($conn, $createTableQuery);
    }
    catch(Exception $e)
    {
        echo "Error creating table: " . $e;
        echo "<br> <br>";
    }
}


$sqlCus = 
"create table customers (
    customer_id int(11) NOT NULL AUTO_INCREMENT,
    customer_name varchar(255) NOT NULL,
    customer_address varchar(255) NOT NULL,
    customer_phone varchar(255) NOT NULL,
    customer_email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (customer_id)
)";


$sqlOrd="create table order_details (
    detail_id int(11) NOT NULL AUTO_INCREMENT unique,
    order_id int(11) NOT NULL,
    product_id int(11) NOT NULL,
    quantity int(11) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (order_id, product_id),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id)
)";



$sqlOrder="create TABLE orders (
    order_id int(11) NOT NULL AUTO_INCREMENT,
    order_name varchar(255) NOT NULL,
    order_address varchar(255) NOT NULL,
    order_phone varchar(255) NOT NULL,
    order_email varchar(255) NOT NULL,
    order_status varchar(255) NOT NULL,
    total_price int(11) NOT NULL,
    payment_method varchar(255) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (order_id)
)";

$sqlCat=
"create table IF NOT EXISTS catagory(
    catagory_id int(11) NOT NULL AUTO_INCREMENT,
    catagory_name varchar(255) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (catagory_id)
)";

$sqlProduct=
"
create table product (
    product_id int(11) NOT NULL AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    product_description varchar(255) NOT NULL,
    product_price int(11) NOT NULL,
    product_image varchar(255) NOT NULL,
    catagory_id int(11) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (product_id),
    FOREIGN KEY (catagory_id) REFERENCES catagory(catagory_id)
)";



$sqlContact ="create table contact (
    id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    msg varchar(255) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)";



$sqlAdmin ="create table admins(

    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    primary key(id)
)";


CreateTable($conn,$sqlCus);
CreateTable($conn,$sqlOrder);
CreateTable($conn,$sqlOrd);

CreateTable($conn,$sqlCat);
CreateTable($conn,$sqlProduct);

CreateTable($conn,$sqlContact);

CreateTable($conn,$sqlAdmin);









?>