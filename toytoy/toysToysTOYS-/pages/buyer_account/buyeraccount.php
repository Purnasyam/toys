<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="buyeraccount.css">
    <title>Toys</title>
    <script defer src="accountscript.js"></script>
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
    <img id="profile" src="..\..\assets\images\facebook_no_profile_pic2-jpg.gif" width="300" height="450">
    <form id="myform" action="..\buyer_info\buyer_info.php" method="GET">
    
        <div id="content">
            <h1><b>Personal info</b></h1>
            <label id="lname" for="uname"><?php echo $_SESSION["email"]; ?></label>
            <button id="buname"><img src="..\..\assets\images\edit.jpg" height="10px" width="10px"></button>

            <h1><b>Password</b></h1>
            <span>Create a password or modify your existing one.</span><br>
            <label for="emails">**********************</label>
            <button id="email" onclick="username()"><img src="..\..\assets\images\edit.jpg" height="10px" width="10px"></button>
            <!--
                  <input type="email" name="emails">-->
    

            <h1>Secret questions</h1>
            <span>Give yourself another secure way<br> to recover your account.</span>
            <label for="pnumber">.</label><br>
            <button id="pnumber" onclick="username()"><img src="..\..\assets\images\edit.jpg" height="10px" width="10px"></button>
            <!--
                <input type="number" name="pnumber">-->
        

            <div id="buttons">
                <input class="button-1" id="save" type="submit" value="Save info"><br>
                <a href="account_card_info\buyeraccount.html"><button class="button-1" id="Payment">Payment Info</button></a><br>
                <a href="buyer_info\buyer_info.html"><button class="button-1" id="buyer_info">Personal Info</button></a>
            </div>
        </div>
    </form>

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