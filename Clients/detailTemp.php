<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details-WEARit</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/cart.png" type="image/x-icon">
</head>
<body>
   
 <?php
include ("includes/header.php");
?>
   
 
    <div class="categories-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            
            <?php
				include("includes/connect.php");
				$id=$_GET['details_id'];
				$sql="Select * from product where product_id='$id'";
				$results=$connect->query($sql);
				$final=$results->fetch_assoc();

				?>
            <div class="col-2">
                <p>Home/T-Shirt</p>
                <h1><?php echo $final['product_name'] ?></h1>
                <h4>&#2547 <?php echo $final['product_price'] ?></h4>

                <select>
                    <option>Select size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>medium</option>
                    <option>Small</option>
                </select>

                <input type="number" value="1">
                <a href="" class="btn">Add to cart</a>
                <h3>Product details</h3>
               <p><?php echo $final['product_description'] ?></p> 

            </div>
        </div>

    </div>
    <div class="categories-container">
        <div class="row row 2">
        
            <h2><span id="featured">Related</span> Product</h2>
            <p>view more</p>
        </div>
    </div>





    <div class="categories-container"><br><br>
       
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
     
        
    </div>
  

    <?php
include ("includes/footer.php");
?>
   

   

   <script>
       var ProductImg = document.getElementById("ProductImg");
       var smallimg = document.getElementsByClassName("small-img");

       smallimg[0].onclick = function()
       {
        ProductImg.src = smallimg[0].src;
       }
       smallimg[1].onclick = function()
       {
        ProductImg.src = smallimg[1].src;
       }
       smallimg[2].onclick = function()
       {
        ProductImg.src = smallimg[2].src;
       }
       smallimg[3].onclick = function()
       {
        ProductImg.src = smallimg[3].src;
       }
   </script>
    
</body>
</html>