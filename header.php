<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sk">

<head>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="rozhovory-carousel.css">

<!-- <link rel="stylesheet" href="login-box.css"> -->

<body>

    <section class="hlavicka">

        <header class="celemenu">

            <div class="navigacia">

                <a href="" id="link" target="_blank">

                    <div class="logo">

                        <img id="img" class="logomix" src="" alt="">

                        <h2 id="text" style="font-weight: 500;" class="popismix"></h2>

                    </div>

                </a>

                <div class="menu">

                    <ul class="menu-list">

                        <li class="dropdown">
                            <a href="#" class="drop-button">Pre učiteľov</a>

                            <div class="dropdown-content">

                            
                                <a href="pravidla.pdf" target="_blank" class="dropdown-text">Zdroje pre učiteľov</a>

                            </div>

                        </li>

                        <li class="dropdown">
                            <a href="Navbar" class="drop-button">Pre študentov</a>

                            <div class="dropdown-content">

                                <!-- <a href="#" class="dropdown-text">Téma</a>
                                <a href="#" class="dropdown-text">Ako na to</a>
                                <a href="#" class="dropdown-text">Kategórie projektov</a>
                                <a href="#" class="dropdown-text">Návrhy projektov</a> -->
                                <a href="zdroje-studenti.php" target="_blank" class="dropdown-text">Zdroje pre študentov</a>

                            </div>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="drop-button">O nás</a>

                            <div class="dropdown-content">

                                <a href="#" class="dropdown-text">Náš tím</a>
                                <a href="#" class="dropdown-text">Prečo sa zapojiť do DHK</a>

                            </div>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="drop-button">Sponzori</a>

                            <div class="dropdown-content">

                                <a href="#" class="dropdown-text">Prehľad partnerov</a>

                            </div>

                        </li>

                    </ul>

                </div>

                <div class="prihlasenie">

                    <?php
                       if(isset($_SESSION["name"])){
                            echo" <li class='dropdown'>
                            <a id='pozdrav'class='drop-button' data='".$_SESSION["intro"]."' style='text-transform: capitalize;' >Ahoj " .  $_SESSION["name"] . "!</a>
                        
                            <div class='dropdown-content'>
    
                                <a href='my-profile.php' class='dropdown-text'>Môj profil</a>
                                <a href='calendar-profile.php' class='dropdown-text'>Kalendár udalostí</a>
                                <a href='activity-profile.php' class='dropdown-text'>Priebežná práca</a>";
if( $_SESSION["type"] == "admin"){echo"<a href='admin.php' class='dropdown-text'>Admin</a>";}
                               echo"<a href='logout.php' class='dropdown-text'><strong>Odhlásiť sa</strong></a>

                            </div>
                        
                        </li>";
                       } else {
echo"<li class='dropdown'>
                            <a class='drop-button' onclick='document.getElementById(\"id01\").style.display=\"block\"' style=\"width:auto;\">Prihlásenie</a>";
                       } ?>


                    </li>



                </div>

            </div>

        </header>



    </section>