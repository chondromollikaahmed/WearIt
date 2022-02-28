<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-WEARit</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/cart.png" type="image/x-icon">
</head>

<body>

  
    <?php
include ("includes/header.php");
?>

    <div class="categories-container cart">
        <table>
            <tr>
                <th>product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>red T-shirt</p>
                            <small>&#2547 500.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>&#2547 500.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>red T-shirt</p>
                            <small>&#2547 500.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>&#2547 500.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>red T-shirt</p>
                            <small>&#2547 500.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>&#2547 500.00</td>
            </tr>
        </table>
    </div>

    
    <?php
include ("includes/footer.php");
?>

    <script>
        var menuitem = document.getElementById("menuitem");
        menuitem.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitem.style.maxHeight == "0px") {
                menuitem.style.maxHeight = "200px"
            }

            else {
                menuitem.style.maxHeight == "0px"
            }
        }
    </script>

   

</body>

</html>