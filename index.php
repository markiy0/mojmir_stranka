
       
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

                                <a href="#" class="dropdown-text">Téma</a>
                                <a href="#" class="dropdown-text">Ako na to</a>
                                <a href="#" class="dropdown-text">Kategórie projektov</a>
                                <a href="#" class="dropdown-text">Návrhy projektov</a>
                                <a href="#" class="dropdown-text">Zdroje pre študentov</a>

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

                    <li class='dropdown'>
                            <a class='drop-button' onclick='document.getElementById("id01").style.display="block"' style="width:auto;">Prihlásenie</a>

                    </li>



                </div>

            </div>

        </header>



    </section>
       <section class="main">

           <div class="prva-cast">

               <div id="slider">

                   <a id="prev" href="#">&#8810;</a>
                   <a id="next" href="#">&#8811;</a>
                   <ul id="slideWrap">

                       <li><img src="obrazky/druhy-obrazok.jpg" alt=""></li>
                       <li><img src="obrazky/treti-obrazok.jpg" alt=""></li>
                       <li><img src="obrazky/stvrty-obrazok.jpeg" alt=""></li>
                       <li><img src="obrazky/piaty-obrazok.jpeg" alt=""></li>
                   </ul>

               </div>

               <!--<h1 class="news">
                    Novinky & ceny
                </h1>
                -->
           </div>

           <div class="clanok">

               <h1 class="KK">
                   Kežmarok
                   <br>po 1945
               </h1>

               <div class="rozhovor0">

                   <p class="zastupny">
                       Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab voluptatum odio magni accusantium
                       dolores ex alias reiciendis nesciunt laudantium aspernatur quasi accusamus, aliquam mollitia quae
                       in sequi quam nam rerum?
                       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam beatae a delectus non omnis?
                   </p>

                   <div class="stred">
                       <button class="tlacitko1">
                           <svg width="220px" height="50px" viewBox="0 0 220 50" class="border1">
                               <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                               <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                           </svg>
                           <span>Chcem vedieť viac!</span>
                       </button>
                   </div>

               </div>

           </div>

           <div class="vsetky-rozhovory">

               <div class="nadpis-rozhovory">

                   <h1 class="na-rozhovory">Sekcia rozhovorov</h1>

               </div>

               <div class="wrapper">
                    <div class="carousel owl-carousel">
                        <div class="card card-1">
                            <div class="prvy-rozhovor">
                                <h3 class="nadpis1">More</h3>
                                <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                                <div class="okraj">

                                

                                    <p class="paragraf1">
                                    No tak s týmto tu rozhvor asi ťažko,
                                    <br>keďže je už dávno za opicami chalanko.
                                    </p>

                                    <div class="stred">
                                        <button class="tlacitko2">
                                            <svg width="220px" height="50px" viewBox="0 0 220 50" class="border2">
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                            </svg>
                                            <span>Chcem vedieť viac!</span>
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card card-2">
                            <div class="prvy-rozhovor">
                                <h3 class="nadpis1">More</h3>
                                <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                                <div class="okraj">

                                

                                    <p class="paragraf1">
                                    No tak s týmto tu rozhvor asi ťažko,
                                    <br>keďže je už dávno za opicami chalanko.
                                    </p>

                                    <div class="stred">
                                        <button class="tlacitko2">
                                            <svg width="220px" height="50px" viewBox="0 0 220 50" class="border2">
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                            </svg>
                                            <span>Chcem vedieť viac!</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card card-3">
                            <div class="prvy-rozhovor">
                                <h3 class="nadpis1">More</h3>
                                <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                                <div class="okraj">

                                

                                    <p class="paragraf1">
                                    No tak s týmto tu rozhvor asi ťažko,
                                    <br>keďže je už dávno za opicami chalanko.
                                    </p>

                                    <div class="stred">
                                        <button class="tlacitko2">
                                            <svg width="220px" height="50px" viewBox="0 0 220 50" class="border2">
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                            </svg>
                                            <span>Chcem vedieť viac!</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-4">
                            <div class="prvy-rozhovor">
                                <h3 class="nadpis1">More</h3>
                                <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                                <div class="okraj">

                                

                                    <p class="paragraf1">
                                    No tak s týmto tu rozhvor asi ťažko,
                                    <br>keďže je už dávno za opicami chalanko.
                                    </p>

                                    <div class="stred">
                                        <button class="tlacitko2">
                                            <svg width="220px" height="50px" viewBox="0 0 220 50" class="border2">
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                            </svg>
                                            <span>Chcem vedieť viac!</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="prvy-rozhovor">
                                <h3 class="nadpis1">More</h3>
                                <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                                <div class="okraj">

                                

                                    <p class="paragraf1">
                                    No tak s týmto tu rozhvor asi ťažko,
                                    <br>keďže je už dávno za opicami chalanko.
                                    </p>

                                    <div class="stred">
                                        <button class="tlacitko2">
                                            <svg width="220px" height="50px" viewBox="0 0 220 50" class="border2">
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                            </svg>
                                            <span>Chcem vedieť viac!</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="prvy-rozhovor">
                                <h3 class="nadpis1">More</h3>
                                <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                                <div class="okraj">

                                

                                    <p class="paragraf1">
                                    No tak s týmto tu rozhvor asi ťažko,
                                    <br>keďže je už dávno za opicami chalanko.
                                    </p>

                                    <div class="stred">
                                        <button class="tlacitko2">
                                            <svg width="220px" height="50px" viewBox="0 0 220 50" class="border2">
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                                <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                            </svg>
                                            <span>Chcem vedieť viac!</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               <!-- <div class="rozhovory">

                    <div class="items">
                        <div class="items_wrapper">
                            <div class="item active">
                                <img src="obrazky/Alexander.jpg">
                                <div class="info active">
                                    <h3 class="nadpis1">nenvein</h3>
                                    <p class="paragraf1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eaque laborum eos aspernatur mollitia non voluptatibus odit molestias? Doloremque omnis officiis animi? Expedita veritatis quos nemo incidunt? Maxime, eos enim.</p>
                                    <a href="">
                                        <button class="citaj-viac">Čítaj viac</button>
                                    </a>
                                </div>
                            </div>
                            <div class=" item next">
                                <img src="obrazky/Alexander.jpg">
                            </div>
                            <div class="item">
                                <img src="obrazky/Alexander.jpg">
                            </div>
                            <div class="item">
                                <img src="obrazky/Alexander.jpg">
                            </div>
                            <div class="item prev">
                                <img src="obrazky/Alexander.jpg">
                            </div>
                            <div class="button-container">
                                <div class="button"><i class="fas fa-angle-left"></i></div>
                                <div class="button"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div> -->


               


               <!-- <div class="rozhovory-zarovnanie">

                   <div class="prvy-rozhovor">

                       <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                       <div class="okraj">

                           <h3 class="nadpis1">Názov rozhovoru 1</h3>

                           <p class="paragraf1">
                               No tak s týmto tu rozhvor asi ťažko,
                               <br>keďže je už dávno za opicami chalanko.
                           </p>

                           <a href="">
                               <button class="citaj-viac">Čítaj viac</button>
                           </a>

                       </div>

                   </div>

                   <div class="druhy-rozhovor">

                       <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                       <div class="okraj">

                           <h3 class="nadpis1">Názov rozhovoru 2</h3>

                           <p class="paragraf1">
                               No tak s týmto tu rozhvor asi ťažko,
                               <br>keďže je už dávno za opicami chalanko.
                           </p>

                           <a href="">
                               <button class="citaj-viac">Čítaj viac</button>
                           </a>

                       </div>

                   </div>

                   <div class="treti-rozhovor">

                       <img class="rozhovor1" src="obrazky/Alexander.jpg" alt="">

                       <div class="okraj">

                           <h3 class="nadpis1">Názov rozhovoru 3</h3>

                           <p class="paragraf1">
                               No tak s týmto tu rozhvor asi ťažko,
                               <br>keďže je už dávno za opicami chalanko.
                           </p>

                           <a href="">
                               <button class="citaj-viac">Čítaj viac</button>
                           </a>

                       </div>

                   </div>

               </div>

                </div> -->

           <div class="priebeh-sutaze">

               <h1 class="nadpis-sutaze">Priebeh súťaže</h1>

               <div class="funkcionalita">

                   <div class="riadok">

                       <div class="boxiky1">

                           <h3>1.Vymýšľaj</h3>

                           <!-- <p>
                               Čo ti napadne, keď sa povie Kežmarok po 1945?
                               Ulica? Udalosť? Osobnosť?
                               Predstavivosti sa medze nekladú.
                           </p>

                           <a href="">
                               <button class="chcem-viac">Chcem vedieť viac!</button>
                           </a> -->

                           <div class="stred">
                               <button class="tlacitko">
                                   <svg width="220px" height="50px" viewBox="0 0 220 50" class="border">
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                   </svg>
                                   <span>Chcem vedieť viac!</span>
                               </button>
                           </div>

                       </div>

                       <div class="boxiky2">

                           <h3>2.Vypracuj</h3>

                           <!-- <p>
                               Vypracuj hypotézu
                           </p>

                           <a href="">
                               <button class="chcem-viac">Chcem vedieť viac!</button>
                           </a> -->

                           <div class="stred">
                               <button class="tlacitko">
                                   <svg width="220px" height="50px" viewBox="0 0 220 50" class="border">
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                   </svg>
                                   <span>Chcem vedieť viac!</span>
                               </button>
                           </div>

                       </div>

                       <div class="boxiky3">

                           <h3>3.Zúčastnuj sa</h3>

                           <!-- <p>
                               Zúčastňuj sa na podujatiach,
                               ktoré máš plne k dispozícii.
                               Snaž sa zobrať si z podujatia čo najviac.
                           </p>

                           <a href="">
                               <button class="chcem-viac">Chcem vedieť viac!</button>
                           </a> -->

                           <div class="stred">
                               <button class="tlacitko">
                                   <svg width="220px" height="50px" viewBox="0 0 220 50" class="border">
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                   </svg>
                                   <span>Chcem vedieť viac!</span>
                               </button>
                           </div>

                       </div>

                       <div class="boxiky4">

                           <h3>4.Konzultuj</h3>

                           <!-- <p>
                               Rozprávaj, veď dialóg.
                               Vieš si rezervovať stretnutie,
                               tak prečo to nevyužiť.
                           </p>

                           <a href="">
                               <button class="chcem-viac">Chcem vedieť viac!</button>
                           </a> -->
                           <div class="stred">
                               <button class="tlacitko">
                                   <svg width="220px" height="50px" viewBox="0 0 220 50" class="border">
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                   </svg>
                                   <span>Chcem vedieť viac!</span>
                               </button>
                           </div>

                       </div>

                       <div class="boxiky5">

                           <h3>5.Vyberaj</h3>

                           <!-- <p>
                               Máš radšej referát alebo poster?
                               Sám si vyber ako projekt spracuješ.
                               Predstavivosti sa znovu medze nekladú.
                           </p>

                           <a href="">
                               <button class="chcem-viac">Chcem vedieť viac!</button>
                           </a> -->

                           <div class="stred">
                               <button class="tlacitko">
                                   <svg width="220px" height="50px" viewBox="0 0 220 50" class="border">
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                   </svg>
                                   <span>Chcem vedieť viac!</span>
                               </button>
                           </div>

                       </div>

                       <div class="boxiky6">

                           <h3>6.Prezentuj</h3>

                           <!-- <p>
                               Najskôr musíš uspieť na školskom kole.
                               Potom si môžeš zmerať sily na mestskom
                               kole. A až potom môžeš niečo vyhrať.
                           </p>

                           <a href="">
                               <button class="chcem-viac">Chcem vedieť viac!</button>
                           </a> -->

                           <div class="stred">
                               <button class="tlacitko">
                                   <svg width="220px" height="50px" viewBox="0 0 220 50" class="border">
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="bg-line" />
                                       <polyline points="219,1 219,49 1,49 1,1 219,1" class="hl-line" />
                                   </svg>
                                   <span>Chcem vedieť viac!</span>
                               </button>
                           </div>

                       </div>

                   </div>

               </div>

           </div>

           <div class="os">

               <h1 class="os-nadpis">
                   Časová os bude február
                   <br>
               </h1>
               <img class="os-obrazok" src="obrazky/casova-os.png" alt="">

               <p class="os-popis">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quam? Repellat quam eius eligendi
                   iure tempora voluptate itaque animi ipsum! In veritatis ab voluptatem. Perferendis deserunt voluptate
                   aperiam quasi ea.
               </p>

           </div>
           <div class="odznak">

               <h1 class="odznak-nadpis">
                   Získavanie odznakov
               </h1>

               <div class="obrazky">

                   <img class="obrazky_img" src="Loga png/Casovy-menezment-0lvl.png" alt="">
                   <img class="obrazky_img" src="Loga png/Citatelske-zrucnosti-0lvl.png" alt="">
                   <img class="obrazky_img" src="Loga png/Diskusia-0lvl.png" alt="">
                   <img class="obrazky_img" src="Loga png/Praca-v-time-0lvl.png" alt="">
                   <img class="obrazky_img" src="Loga png/Kryticke-myslenie-0lvl.png" alt="">

               </div>

           </div>

       </section>

       <section class="päta">

    <footer class="päticka">

        <img src="Loga png/DHK-biele.png" alt="" class="dhk">

        <div class="menu-päta">

            <ul class="päta-odkaz">

                <a href="#" class="odkaz-päta">
                    <li class="informacie-päta">Ochrana osobných údajov</li>
                </a>

                <a href="#" class="odkaz-päta">
                    <li class="informacie-päta">Copyright</li>
                </a>
                <a id="step-four" href="#" class="odkaz-päta">
                    <li class="informacie-päta">Podpora</li>
                </a>

            </ul>

        </div>

    </footer>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script src="main.js"></script>       <div id="id01" class="modal">

           <form class="modal-content animate" action="login.php" method="post">
               <div class="imgcontainer">
                   <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
                   <h1 class="form__title">Prihlásenie</h1>
               </div>

               <div class="container">

                   <div class="form__input-group"><input type="email" placeholder="Prihlasovací email" name="email"
                           required></div>



                   <div class="form__input-group"><input type="password" placeholder="Heslo" name="psw" required></div>

                                      <button class="form-button" name="submit" type="submit">Prihlásiť sa</button>
                   <p class="psw"> <a href="#">Zabudol si svoje heslo?</a></p>

               </div>


               <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->

           </form>

       </div>

       <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
if (window.location.href.split("=").pop() == "invalidEmail" || window.location.href.split("=").pop() ==
    "invalidPassword") {
    console.log("Nesprávne heslo!");
    modal.style.display = "block";

}
       </script>



       </body>

       <script src="nahodne-logo.js"></script>
       <script src="carousel.js"></script>
       <script src="https://cdn.jsdelivr.netr/npm/swiper@8/swiper-bundle.min.js"></script>
       <script src="carousel_card.js"></script>
       <script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: false,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
      </script>



       </html>