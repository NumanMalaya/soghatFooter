<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soghats</title>
    <link rel="stylesheet" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <?php
        $footerAnimation = true;
        if($footerAnimation){
            $footerAnimationDisplay = "block";
        }
        else{
            $footerAnimationDisplay = "none";
        }
    ?>
    <style>
        .footer-animation{
            display: <?php echo $footerAnimationDisplay; ?>;
        }
    </style>
</head>

<body>
    <div class="container-fluid pt-5 ps-lg-0 ps-md-4 footer">
        <div class="row px-lg-5 r1">
            <div class="col-xl-3 col-lg-4 pb-4 cl1">
                <a href="index.html"><img src="pics/website_logo.svg" class="mt-1 ps-2 website_logo" alt=""></a>
                <p class="pt-2">At Soghats we offer a range of traditional Pakistani sweets known for quality, and
                    culture.</p>
                <div class="footer-icons my-3">
                    <span class="pb-2 ps-1">Follow us</span>
                    <a href="https://www.facebook.com/soghats.pk/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/soghats.pk/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.threads.com/soghats.pk/" target="_blank"><i class="fa-brands fa-threads"></i></a>
                    <a href="https://wa.me/923111222629?" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 pt-md-0 col-6 pt-4 pb-4 cl2">
                <h4>Brands</h4>
                <ul class="pt-4">
                    <li><a href="https://soghats.pk/Khalifa-bakers">Khalifa Bakers</a></li>
                    <li><a href="https://soghats.pk/Pehalwan-Rewari">Pehalwan Rewari</a></li>
                    <li><a href="https://soghats.pk/Hafiz-Halwa">Hafiz Halwa</a></li>
                    <li><a href="https://soghats.pk/AL-Khair-Sweets">AL-Khair Sweets</a></li>
                    <li><a href="https://soghats.pk/BABA-Bakers">BABA Bakers</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 pt-md-0 col-6 pt-4 pb-4 cl2">
                <h4>Sellers</h4>
                <ul class="pt-4">
                    <li><a href="https://soghats.pk/Badayuni">Badayuni</a></li>
                    <li><a href="https://soghats.pk/Khawaja-Sohan-Halwa">Khawaja Sohan Halwa</a></li>
                    <li><a href="https://soghats.pk/NIMCO%27S">NIMCO'S</a></li>
                    <li><a href="https://soghats.pk/Nimco-Corner">Nimco Corner</a></li>
                    <li><a href="https://soghats.pk/Nimco-Delight">Nimco Delight</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 pt-md-0 pt-4 pb-4 cl3">
                <h4>Support</h4>
                <ul class="pt-4">
                    <li><a href="https://soghats.pk/Privacy-Policy">Privacy Policy</a></li>
                    <li><a href="https://soghats.pk/Contact-us">Contact Us</a></li>
                    <li><a href="https://soghats.pk/About-us">About Us</a></li>
                    <li><a href="https://soghats.pk/About-us">Terms & Conditions</a></li>
                    <li><a href="https://soghats.pk/About-us">Returns & Refunds</a></li>
                </ul>
            </div>
            <div class="col-xl-3 mt-xl-0 col-lg-4 mt-lg-5 col-md-4 pt-md-0 pt-4 pb-4 cl4">
                <h4>Subscribe</h4>
                <p class="pt-4">Email us at <b style="font-size: 14px;" class="text-warning">soghats.pk@gmail.com</b>
                    <br>You can also text our support team at : <br>
                    <b style="font-size: 14px;" class="text-warning">(92)-311-1222629</b>
                </p>
                <div class="subscribe-form-copy mt-3">
                    <form action="#">
                        <input type="text" placeholder="Email Address">
                        <button class="bg-warning" style="font-size: 23px;"><i
                                class="fab fa-telegram-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-animation">
        <div class="footer_bg_one"></div>
        <div class="footer_bg_two"></div>
    </div>
    <div class="container-fluid ps-lg-0 ps-md-4 payment-gateways">
        <div class="row px-lg-5 mt-1 py-2 r1">
            <div class="col-lg-5 col-md-6 text-md-start text-center cl1" style="height: 25px;">
                <p>Copyright © 2024 Soghats.pk. All rights reserved.</p>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-5 offset-md-1 cl2" style="height: 25px;">
                <img src="pics/payment-icon-2.png" width="100%" height="30px" alt="">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>