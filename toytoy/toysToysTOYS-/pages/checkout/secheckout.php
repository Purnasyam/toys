<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Toys</title>
</head>

<body>
    <!-- The Header for the Webpage -->
    <header>
        <a href="..\homepage\home.php" class="logo-text">TOYS</a>
        <div class="nav-search-bar">
            <input class="nav-search-text-field" type="text" placeholder="What are you looking for?" name="user_search" id="search">
            <a href=""><img class="nav-search-button" src="..\..\assets\icons\search-filled.png" alt="search"></a>
        </div>
        <div class="nav-buttons">
            <a href=""><img class="nav-link help-icon" src="..\..\assets\icons\help.png" alt="help"></a>
            <a href="..\login\login.php">
                <div class="nav-account">
                    <img class="nav-link " src="..\..\assets\icons\user.png" alt="account">
                    <p>
                        <?php
                        session_start();
                        if (isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])) {
                            echo "Hi, " . $_SESSION['first_name'];
                        } else {
                            echo "Login";
                        }
                        ?>
                    </p>
                </div>
            </a>
            <a href="..\cart\cart.php"><img class="nav-link cart" src="..\..\assets\icons\cart.png" alt="cart"></a>
        </div>
    </header>





    <h1>PAYMENT DETAILS</h1>
    <form action="process_checkout.php" method="POST">
        <div class="one">
            <h3>Card details</h3>
            <label>Card number</label>
            <input class="textfield" type="text" id="card_number" name="card_number">
            <br>
            <br>
            <label>Expiration date</label>
            <input class="textfield" type="date" id="expdate" name="expdate">
            <br>
            <br>
            <label>Security code</label>
            <input class="textfield" type="text" id="securitycode" name="securitycode">
            <br>
            <br>
        </div>
        <div class="two">
            <h3>Delivery info</h3>
            <div class="three">
                <label>First name</label>
                <br>
                <input class="textfield" type="text" id="firstname" name="firstname">
                <br>
                <br>
                <label>Last name</label>
                <br>
                <input class="textfield" type="text" id="lastname" name="lastname">
                <br>
                <br>
            </div>
            <br>
            <label>Destination</label>
            <br>
            <input class="textfield" type="text" id="destination" name="destination">
            <br>
            <br>
            <label>Address</label>
            <br>
            <input class="textfield" type="Address" id="address" name="useraddress">
            <br>
            <br>
            <div class="four">
                <label>City</label>
                <input class="textfield" type="text" id="city" name="usercity">
                <br>
                <br>
                <label>State</label>
                <input class="textfield" type="text" id="state" name="state">
                <br>
                <br>
                <label>Telephone</label>
                <input class="textfield" type="Phone" id="telno" name="userphone">
            </div>

            <br>
            <br>
            <input class="button-1" type="submit" value="Checkout">
        </div>


        <!-- The Footer for the Webpage -->
        <!-- TIP: You can move it lower by changing the top value in the css. (Footer section) -->
        <footer>
            <div class="footer-list-1">
                <a href="..\homepage\home.php" class="logo-text">TOYS</a>
                <div class="footer-social-media-links">
                    <a href="https://www.facebook.com/"><img class="icon-facebook" src="..\..\assets\icons\facebook.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img class="icon-instagram" src="..\..\assets\icons\instagram.png" alt="instagram"></a>
                    <a href="https://www.twitter.com/"><img class="icon-twitter" src="..\..\assets\icons\twitter.png" alt="twitter"></a>
                </div>
                <p class="footer-copyright">©2022. Toys</p>
            </div>
            <div class="footer-list-2">
                <p class="footer-title">INFO</p>
                <a href="">ABOUT US</a>
                <a href="">CONTACT US</a>
                <a href="">WORK WITH US</a>
                <a href="">PRIVACY POLICY</a>
            </div>

            <div class="footer-list-3">
                <p class="footer-title">CUSTOMER CARE</p>
                <a href="">SHIPPING</a>
                <a href="">RETURNS</a>
                <a href="">GIFT CARDS</a>
                <a href="">OUTLET</a>
            </div>
        </footer>
</body>

</html>