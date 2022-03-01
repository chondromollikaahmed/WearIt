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


                <?php

				include("includes/connect.php");
				$sql="select * from product";
				$results=$connect->query($sql);


				while ($final=$results->fetch_assoc()) {

				?>

                <div class="col-4">


                <a href="detailTemp.php?details_id=<?php echo $final['product_id']?>" >
		
                
                      <img src=
                       "../admin/<?php echo $final['product_image'];?>">
        
							</a>
                    
                    <h4 style="text-align: center;">
                <?php echo $final['product_name']; ?>
                </h4>
                    <p style="text-align: center;">&#2547 
                <?php echo $final['product_price']; ?>
                
                </p>
                </div>

                <?php } ?>



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