<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CQH5ZNT4EZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-CQH5ZNT4EZ');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Deň histórie mesta Kežmarok</title>
</head>

<link rel="stylesheet" href="button-effect.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<link rel="stylesheet" href="carousel_card.css">
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="carousel.css">
<link rel="stylesheet" href="confeti.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="rozhovory-carousel.css">

<!-- <link rel="stylesheet" href="login-box.css"> -->

<body>

    <section class="hlavicka">

        <div class="celemenu">

            <div class="navigacia">

                <a href="" id="link" target="_blank">

                    <div class="logo">

                        <img id="img" class="logomix" src="" alt="">

                        <h2 id="text" style="font-weight: 500;" class="popismix"></h2>

                    </div>

                </a>

                <div id='menu' class="menu">

                    <ul id='menuList' class="menu-list">

                        <li class="dropdown">
                            <a href="#" class="drop-button">Pre učiteľov</a>

                            <div class="dropdown-content">


                                <a href="pravidla.pdf" target="_blank" class="dropdown-text">Zdroje pre učiteľov</a>

                            </div>

                        </li>

                        <li class="dropdown">
                            <a href="Navbar" class="drop-button">Pre študentov</a>

                            <div class="dropdown-content">


                                <a href="Plagiatorstvo.pdf" target="_blank" class="dropdown-text">Plagiátorstvo</a>
                                <a href="Zaciname.pdf" target="_blank" class="dropdown-text">Začíname</a>
                                <a href="Vystpy.pdf" target="_blank" class="dropdown-text">Výstupy</a>
                                <a href="Hypoteza.pdf" target="_blank" class="dropdown-text">Hypotéza</a>

                            </div>

                        </li>

                        <li class="dropdown">
                            <a href="Navbar" class="drop-button">O nás</a>

                            <div class="dropdown-content">

                                <a href="SubNavbar" class="dropdown-text">Náš tím</a>
                                <a href="SubNavbar" class="dropdown-text">Prečo sa zapojiť do DHK</a>

                            </div>

                        </li>

                        <li class="dropdown">
                            <a href="Navbar" class="drop-button">Sponzori</a>

                            <div class="dropdown-content">

                                <a href="SubNavbar" class="dropdown-text">Prehľad partnerov</a>

                            </div>

                        </li>


                        <?php
                       if(isset($_SESSION["name"])){
                            echo" <li class='dropdown'>
                            <a id='pozdrav'class='drop-button' data='".$_SESSION["intro"]."' style='text-transform: capitalize;' >Ahoj " .  $_SESSION["name"] . "!</a>
                        
                            <div class='dropdown-content'>
    
                                <a href='my-profile.php' class='dropdown-text'>Môj profil</a>
                                <a href='calendar-profile.php' class='dropdown-text'>Kalendár udalostí</a>
                                <a href='activity-profile.php' class='dropdown-text'>Priebežná práca</a>";
if( $_SESSION["type"] == "admin"){echo"<a href='users.php' class='dropdown-text'>Admin</a>";}
                               echo"<a href='logout.php' class='dropdown-text'  onclick='localStorage.clear()'><strong>Odhlásiť sa</strong></a>

                            </div>
                        
                        </li>";
                       } else {
echo"<li class='dropdown'>
                            <a class='drop-button' onclick='
                            login()' style=\"width:auto;\">Prihlásenie</a> </li>";
                       } ?>







                    </ul>

                </div>
                <div class="mobile-menu">
                    <div class="three col">
                        <div class="hamburger" id="hamburger-1" onclick=myFunction()>
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>


    <script>
    $(document).ready(function() {
        $(".hamburger").click(function() {
            $(this).toggleClass("is-active");
        });
    });

    function myFunction() {
        var y = document.getElementById("menu");
        var x = document.getElementById("menuList");
        if (x.className === "menu-list") {
            x.className += " aktiv";
            y.style.display = "block";
        } else {
            x.className = "menu-list";
            y.style.display = "none";
        }
    }

    function login() {

        document.getElementById("id01").style.display = "block";
        var z = document.getElementById("hamburger-1");
        var y = document.getElementById("menu");
        var x = document.getElementById("menuList");
        if (x.className === "menu-list aktiv") {
            x.className = "menu-list";
            y.style.display = "none";
            z.className = "hamburger";
        }
    }
    </script>