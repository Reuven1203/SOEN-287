<?php
session_start();
include("php functions/cart.php")

?>
<!doctype html>
<html lang="en">

<head>
    <title> Shopping Cart </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Munchies.jpg">
    <link rel="stylesheet" type="text/css" href="CSS/style aisle.css" />
    <link rel="stylesheet" type="text/css" href="CSS/cart.css" />
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body onload="onLoad()">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container-fluid nav">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="index.php">
                <img src="https://cdn.dribbble.com/users/6509578/screenshots/15442655/media/25c9f235821b698efae9b157e88dc827.jpg" height="50" width="80" />
                <p class="logo" style="display: inline">
                    <span class="logo-sub">MUNCHIES</span>Market
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="dropbtn">
                            Aisle
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="Aisle\FruitsAndVegetables.php">Fruits and vegetables</a>
                            <a class="dropdown-item" href="Aisle\Beverages.php">Beverages</a>
                            <a class="dropdown-item" href="Aisle\Bakery.php">Bakery</a>
                            <a class="dropdown-item" href="Aisle/Frozen.php">Frozen</a>
                            <a class="dropdown-item" href="Aisle\Butchery.php">Butchery</a>
                            <a class="dropdown-item" href="Aisle\Seafood.php">Seafood</a>
                            <a class="dropdown-item" href="Aisle/Snacks.php">Snacks</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aisle\login.php ">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="p7-p12/backstore/backStore.php">Back Store Page</a>
                    </li>
                </ul>
            </div>
            <div>
                <?php

                if (isset($_SESSION['first'])) {
                    echo "<span style=\"color:white\">Hello " . $_SESSION['first'] . " </span>";
                    echo "<a  style=\"color:white\" href=\"php functions/signOut.php\"> | Sign Out</a>";
                } else {
                    echo "<span style=\"color:white\">Hello Guest User</span>";
                }

                ?>
                <a class="cartIcon" href="Shopping Cart.php"><img src="cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
            </div>
        </nav>
    </div>


    <!-- SHOPPING CART -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 items-list">
                <div class="cart">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-white">Product</th>
                                    <th scope="col" class="text-white">Price</th>
                                    <th scope="col" class="text-white">Quantity</th>
                                    <th scope="col" class="text-white">Total</th>
                                </tr>
                            </thead>
                            <div class="product-display-div">
                                <tbody class="addedProducts">
                                <form method="get" , action ="index.php">
                                    <tr>
                                        <td>
                                            <img src="https://uknow.uky.edu/sites/default/files/styles/facebook/public/chocolate%20cadies%20assortment%20(1280x853).jpg?itok=H6LqJmiT" alt=" ;">
                                            <p>Chocolate</p>

                                        </td>
                                        <td>
                                            <h6>$18.99/Bag</h6>
                                        </td>
                                        <td>
                                            <input type="number" class="shoppinginput" value="1" min="0">
                                        </td>
                                        <td>
    
                                            <span>$</span><output class="itemPrice" id="Chocolate_total">18.99</output>
                                            <button type="submit"  class="btn btn-dark btn1 remove" name="remove" value="Chocolate" > Remove</button> &nbsp
                                        </td>

                                    </tr>
                                </form>
                                    <?php
                                    displayCart();
                                    if(isset($_GET['remove'])){
                                        echo"hjyuy";
                                    }
                                    
                                   
                                    ?>
                                

                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 total">
                <div class="checkout">
                    <ul>
                        <li># OF ITEMS
                            <span>
                                <output id="numOfItems">7</output>
                            </span>
                        </li>
                        <li>subtotal
                            <span>
                                <span>$</span><output id="grandtotalfruitss">71.36</output>
                            </span>
                        </li>

                        <li>QST
                            <span>
                                <span>$</span><output id="QST">3.57</output>
                            </span>
                        </li>
                        <li class="GST">GST
                            <span>
                                <span>$</span><output id="GST">7.12</output>
                            </span>
                        </li>
                        <li class="cart-total">Total
                            <span>
                                <span>$</span><output id="Total_Tax">82.06</output>
                            </span>
                        </li>
                        <!-- <li>
                            <input type="button" value="Calculate Total cost" onclick="afterTax(); QST(); GST();" />
                        </li> -->
                    </ul>
                    <a href="#" class="proceed-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script type="text/javascript" src="js/cart.js"> </script>

</body>