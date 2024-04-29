<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/w3.css" />
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/font-awesom-icon.min.css" />
    <link rel="stylesheet" href="../../assets/google-font.css" />
    <link rel="stylesheet" href="../../assets/bootstrap-3.4.1-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="../../assets/bootstrap-3.4.1-dist/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../../assets/bootstrap-3.4.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/bootstrap-3.4.1-dist/css/bootstrap.min.css" />
    <script src="../../assets/w3-script.JS"></script>
    <script src="../../assets/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LINKUP | Official Website</title>
</head>

<body>
    <!-- building the navigation -->
    <div class="w3-top">
        <div class="w3-bar w3-card w3-darkblue">
            <!-- <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-large w3-hover-darkblue w3-hide-medium w3-hide-large w3-right" onclick="myFunction()"><i class="fa fa-bars "></i></a>

            <a href="skill_register/campusbased.php" class="w3-hide-small w3-padding-large w3-right" onclick="myFunction()"><i style="color: white;" class="fa fa-user-plus w3-large"></i></a> -->

            <a style="text-decoration: none; color: #fff;" href="index.html" class="w3-bar-item w3-xlarge  W3-monospace">LINK
                UP
            </a>
        </div>
    </div>

    <div class="header">
        <h2 class="w3-justify">Thank You for your submission</h2>
        <p class="w3-left">
            Our Team will verify the data and get back to you as soon as possible
        </p>
    </div>

    <div class="w3-container">
        <div class="w3-container w3-left">
            <h2 >Read how it works</h2>
            <ul class="w3-left">
                <li>Register Your skill with us: you can use any of the available form (Campus based or Non-campus based form)</li>
                <li>Or you can request a skill from the available form</li>
                <li>After Successful registration our team will get back to you as possible </li>
            </ul>
            <div class="w3-center">
            <p class="w3-button w3-margin-top w3-darkblue w3-hover-black"><a style="text-decoration: none; color: white;" href="../../index.html">Go Home Now</a></p>
           </div>
        </div>
    </div>
 

    <div class="footer">
        <div class="footer-icons">
            <div class="footer-icon">
                <i class="fa fa-facebook w3-xlarge w3-icon"></i>
                <p class="footer-text">Facebook</p>
            </div>
            <div class="footer-icon">
                <i class="fa fa-instagram w3-xlarge w3-icon"></i>
                <p class="footer-text">Instagram</p>
            </div>
            <div class="footer-icon">
                <i class="fa fa-telegram w3-xlarge w3-icon"></i>
                <p class="footer-text">Telegram</p>
            </div>
            <div class="footer-icon">
                <i class="fa fa-linkedin w3-xlarge w3-icon"></i>
                <p class="footer-text">Linkedin</p>
            </div>
            <div class="footer-icon">
                <i class="fa fa-twitter w3-xlarge w3-icon"></i>
                <p class="footer-text">Twitter</p>
            </div>
        </div>
        <p class="footer-text">info@gmail.com</p>
        <p class="footer-text">Rivers State || Port Harcourt</p>
        <p class="footer-text">@ 2023 LINKUP. All rights reserved</p>
    </div>











    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs((slideIndex += n));
        }

        function currentDiv(n) {
            showDivs((slideIndex = n));
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlide");
            var dots = document.getElementsByClassName("demodots");
            if (n > x.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = x.length;
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }

      
    </script>
</body>

</html>