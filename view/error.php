<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/Main.css">
    <link rel="stylesheet" href="./view/css/main_other.css">
    <!--icon use only-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>

<body style="overflow-x: hidden;">
    <div class="header">
        <div><span class="heading1">Keep Calm and Have a Safe Trip.</span>
            <span class="login">
                <?php if(isset($_SESSION['user_id'])):?>
                    <span><?php echo get_user_name_from_id($_SESSION['user_id'])?></span>&nbsp;<a href="./index.php?action=logout"class="all-link"><i class="fa fa-power-off"></i>&nbsp;</i>Logout</a>
                <?php else:?>
                    <a href="./index.php?action=myAccount&nextAction=home"class="all-link"><i class="fa fa-user"></i>&nbsp;</i>Login / Register</a>
                <?php endif;?>
            </span>
            <hr class="hr-style">
        </div>
        <div>
            <img src="./view/images/phone-icon.svg" class="phone-logo" alt="phone-logo">
            <p class="phone-number ">Call us:<br><a href="tel:+94110123456" class="all-link">+94 11 012 456</a> <br>
        </div>
        <div>
            <img src="./view/images/Logo.jpeg" class="header-logo" alt="header-logo">
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Lets's Find Travel" name="search">
                    <button type="submit" class="search-container-submit">Search</button>
                </form>
            </div>
        </div>
        <div id="navbar">
            <a href="./index.php?action=home">Home</a>
            <a href="./index.php?action=tourPackages">Tour Packages</a>
            <a href="./index.php?action=reviews">Reviews</a>
            <a href="./index.php?action=about">About Us</a>
            <a href="./index.php?action=contact">Contact Us</a>
        </div>
    </div>
    <div class="about-body">
        <div id="popup">
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <img src="./view/images/icon-1.gif">
                    <h1>Oops!<br> <?php echo $error_message?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-1-0">
        <div class="head-footer">
            <div>
                <p class="sub_text">
                    Subscribe to our Newsletter<br> Get all the latest information on Events, Sales and Offers.</p>
                <form action="https://www.boonfair.lk" role="Subscribe ">
                    <input type="text" placeholder="Email address here..." name="search" class="e_text">
                    <button type="subimt" class="e_button">Subscribe</button>
                </form>
                <img src="images/Logo.png" alt="footer-logo" class="footer-logo">
            </div>
            <div class="footer-ul1">
                <ul>
                    <li class="footer-ul-topic">Support</li>
                    <li><a href="#" class="footer-ul-data">Return & Refund Policy</a></li>
                    <li><a href="#" class="footer-ul-data">Terms and Conditions</a></li>
                    <li><a href="#" class="footer-ul-data">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-ul2">
                <ul>
                    <li class="footer-ul-topic">Tour & Deals</li>
                    <li><a href="#" class="footer-ul-data">Deals</a></li>
                    <li><a href="#" class="footer-ul-data">Tout Packages</a></li>
                    <li><a href="#" class="footer-ul-data">Map</a></li>
                </ul>
            </div>
            <div class="footer-ul3">
                <ul>
                    <li class="footer-ul-topic">About Us</li>
                    <li class="footer-ul-data">Phone : <a href="tel:+94110123456" class="footer-ul-data">+94 11 012 456</a></li>
                    <li class="footer-ul-data">Email :<a href="mailto:info@abc.com" class="footer-ul-data"> info@abc.com</a></li>
                    <li><a href="#" class="footer-ul-data">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div>
            <hr class="hr-style">
            <p class="footer-p-1"> ABC Travel &copy; 2022. All Rights Reserved</p>
        </div>
        <button onclick="scrollToUp()" id="goToUp" title="Go to Up" class="upbutton"><i class="fa fa-arrow-up"></i></button>
</body>

</html>
<script>
    window.onscroll = function() {
        myFunction();
        seeButton();
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    var upbutton = document.getElementById("goToUp");
    var modal = document.getElementById("myModal");
    var popup = document.getElementById("popup");
    var span = document.getElementsByClassName("close")[0];
    popup.onload = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "block";
        }
    }

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

    function seeButton() {
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            upbutton.style.display = "block";
        } else {
            upbutton.style.display = "none";
        }
    }

    function scrollToUp() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>