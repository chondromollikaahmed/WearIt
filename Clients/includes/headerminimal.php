<div class="background">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/Graphic1.png" width="125px">
            </div>
            <nav>
                <ul id="menuitem">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register&login.php" >Account</a></li>
                </ul>
            </nav>



            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu" onclick="menutoggle()">


            
        </div>
       
    </div>
</div> 



<script>
       var menuitem = document.getElementById("menuitem");
       menuitem.style.maxHeight = "0px";

       function menutoggle(){
           if(menuitem.style.maxHeight == "10px"){
            menuitem.style.maxHeight = "200px"
           }

           else{
            menuitem.style.maxHeight == "0px"
           }
       }
   </script>