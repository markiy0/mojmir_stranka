<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Deň histórie mesta Kežmarok</title>
    </head>

    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="button-effect.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">  
    <link rel="stylesheet" href="carousel_card.css">
    
    <!-- <link rel="stylesheet" href="login-box.css"> -->

    <body>
        
        <section class="hlavicka">

            <header class="celemenu">

                <div class="navigacia">

                    <a href="" id="link" target="_blank">

                        <div class="logo"  >
                      
                            <img id="img" class="logomix" src="" alt="">
                            
                            <h2 id="text" style="font-weight: 500;" class="popismix"></h2>
                        
                        </div>

                    </a>

                    <div class="menu">
        
                        <ul class="menu-list">
        
                            <li class="dropdown">
                                <a href="#" class="drop-button">Pre učiteľov</a>
        
                                <div class="dropdown-content">

                                    <a href="#" class="dropdown-text">Téma</a>
                                    <a href="#" class="dropdown-text">Informácie</a>
                                    <a href="#" class="dropdown-text">Zdroje pre učiteľov</a>
                                    
                                </div>
        
                            </li>
        
                            <li class="dropdown">
                                <a href="Navbar" class="drop-button">Pre študentov</a>
        
                                <div class="dropdown-content">
        
                                    <a href="SubNavbar" class="dropdown-text">Téma</a>
                                    <a href="SubNavbar" class="dropdown-text">Ako na to</a>
                                    <a href="SubNavbar" class="dropdown-text">Kategórie projektov</a>
                                    <a href="SubNavbar" class="dropdown-text">Návrhy projektov</a>
                                    <a href="SubNavbar" class="dropdown-text">Zdroje pre študentov</a>

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
        
                        </ul>
        
                    </div>

                    <div class="prihlasenie">

                         <?php
                       if(isset($_SESSION["name"])){
                            echo" <li class='dropdown'>
                            <a class='drop-button' style='text-transform: capitalize;' >Ahoj " .  $_SESSION["name"] . "!</a>
                        
                            <div class='dropdown-content'>
    
                                <a href='my-profile.php' class='dropdown-text'>Môj profil</a>
                                <a href='calendar-profile.php' class='dropdown-text'>Kalendár udalostí</a>
                                <a href='activity-profile.php' class='dropdown-text'>Priebežná práca</a>
                                <a href='logout.php' class='dropdown-text'><strong>Odhlásiť sa</strong></a>

                            </div>
                        
                        </li>";
                       } else {
echo"<li class='dropdown'>
                            <a class='drop-button' onclick='document.getElementById(\"id01\").style.display=\"block\"' style=\"width:auto;\">Prihlásenie</a>";
                       } ?> 
                        <!-- <li class="dropdown">
                            <a class="drop-button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Prihlásenie</a> -->
<!--                         
                            <div class="dropdown-content">
    
                                <a href="my-profile.html" class="dropdown-text">Môj profil</a>
                                <a href="calendar-profile.html" class="dropdown-text">Kalendár udalostí</a>
                                <a href="activity-profile.html" class="dropdown-text">Priebežná práca</a>

                            </div> -->
                        
                        </li>

                        <!-- <a href="prihlasenie.html">
                            <button class="login">Prihlásenie</button>
                        </a> -->

                    </div>

                </div>

            </header>

            

        </section>
     