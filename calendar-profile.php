<?php include_once 'header.php';
      include_once 'menu-login.php';
    ?>


<section>
    <div class="uspechy">
        <h1 class="uvitacia-hlaska">Udalosti február</h1>

        <h2 class="nadpis-uspechy">Hop čip kalendarik</h2>
    </div>



    <div id="id02" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img id="avatar" src="" alt="Avatar" class="avatar">
                <p id="message"></p>
            </div>
    </div>
    </form>
    </div>


    <script>
    var modal = document.getElementById('id02');
    var foto = document.getElementById('avatar');
    var message = document.getElementById('message');


    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    if (window.location.href.split("=").pop() == "succesReserve" || window.location.href.split("=").pop() ==
        "unsuccesReserve") {
        modal.style.display = "block";

        if (window.location.href.split("=").pop() == "succesReserve") {
            message.textContent = "Úspešná rezervácia!";
            foto.setAttribute("src", "obrazky/succesful.png");
        }
        if (window.location.href.split("=").pop() == "unsuccesReserve") {
            message.textContent = "Nemôžete si rezervovať ďalší lístok!";
            foto.setAttribute("src", "obrazky/unsuccesful.png");
        }

    }
    </script>


    <?php include_once 'dashboard.php';
      include_once 'oralna-historia.php';    
       
       ?>

</section>
<?php include_once  'footer.php';
    ?>
</body>

<script src="nahodne-logo-prihlasenie.js"></script>

</html>