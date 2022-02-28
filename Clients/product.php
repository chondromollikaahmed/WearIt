<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-WEARit</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/cart.png" type="image/x-icon">
</head>
<body>
   
   
<?php
include ("includes/header.php");
?>
 

    <div class="categories-container"><br><br>
       
       <div class="row row-2">
           <h2> <span id="featured">All</span> Products</h2>
           <select>
               <option>Default filter</option>
               <option>Filter by price</option>
               <option>Filter by popularity</option>
               <option>Filter by sale</option>
           </select>
       </div>
        
        
        <div class="row">
            <div class="col-4">
                <a href="product_details1.html"><img src="images/product-1.jpg"></a>
                <h4 style="text-align: center;">Red T-shirt</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-2.jpg">
                <h4 style="text-align: center;">Black Shoes</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-3.jpg">
                <h4 style="text-align: center;">Grey Shoes</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-4.jpg">
                <h4 style="text-align: center;">BlackT-shirt</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4 style="text-align: center;">Red T-shirt</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-6.jpg">
                <h4 style="text-align: center;">Black Shoes</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-7.jpg">
                <h4 style="text-align: center;">Grey Shoes</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-8.jpg">
                <h4 style="text-align: center;">BlackT-shirt</h4>
                <p style="text-align: center;">&#2547 500.00</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/product-9.jpg">
                    <h4 style="text-align: center;">Red T-shirt</h4>
                    <p style="text-align: center;">&#2547 500.00</p>
                </div>
    
                <div class="col-4">
                    <img src="images/product-10.jpg">
                    <h4 style="text-align: center;">Black Shoes</h4>
                    <p style="text-align: center;">&#2547 500.00</p>
                </div>
    
                <div class="col-4">
                    <img src="images/product-11.jpg">
                    <h4 style="text-align: center;">Grey Shoes</h4>
                    <p style="text-align: center;">&#2547 500.00</p>
                </div>
    
                <div class="col-4">
                    <img src="images/product-12.jpg">
                    <h4 style="text-align: center;">BlackT-shirt</h4>
                    <p style="text-align: center;">&#2547 500.00</p>
                </div>
            </div>
        </div>
      <div class="pg-btn">
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>&#10148</span>
      </div>
        
    </div>
  

   
    <?php
include ("includes/footer.php");
?>

   
    
</body>
</html>