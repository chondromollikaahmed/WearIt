create database wearit;
use wearit;

create table IF NOT EXISTS catagory(
    catagory_id int(11) NOT NULL AUTO_INCREMENT,
    catagory_name varchar(255) NOT NULL,
    PRIMARY KEY (catagory_id)
);


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
);


create TABLE orders (
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
);


create table order_details (
    detail_id int(11) NOT NULL AUTO_INCREMENT UNIQUE,
    order_id int(11) NOT NULL,
    product_id int(11) NOT NULL,
    quantity int(11) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (order_id, product_id),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id)
);



create table customers (
    customer_id int(11) NOT NULL AUTO_INCREMENT,
    customer_name varchar(255) NOT NULL,
    customer_address varchar(255) NOT NULL,
    customer_phone varchar(255) NOT NULL,
    customer_email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (customer_id)
);