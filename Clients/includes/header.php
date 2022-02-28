<div class="background">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/Graphic1.png" width="125px">
            </div>
            <nav>
                <ul id="menuitem">
                    <li><a href="index.php" target="_blank">Home</a></li>
                    <li><a href="product.php"  target="_blank">Products</a></li>
                    <li><a href="aboutus.php"  target="_blank">About</a></li>
                    <li><a href="contact.php"  target="_blank">Contact</a></li>
                    <li><a href="register&login.php"  target="_blank">Account</a></li>
                </ul>
            </nav>



            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu" onclick="menutoggle()">


            
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Wear from <span id="wear">WEAR</span>it!</h1>
                <a href="" class="btn">Explore more</a>
            </div>
            <div class="col-2">
                <img src="images/transparent.png">
            </div>
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