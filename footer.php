<section class="päta">

    <footer class="päticka">

        <img src="Loga-png/DHK-biele.png" alt="" class="dhk">

        <div class="menu-päta">

            <ul class="päta-odkaz">

                <a href="#" class="odkaz-päta">
                    <li class="informacie-päta">Ochrana osobných údajov</li>
                </a>

                <a href="#" class="odkaz-päta">
                    <li class="informacie-päta">Copyright</li>
                </a>

                <a href="#" class="odkaz-päta" onclick="document.getElementById('id05').style.display='block'"
                    style="width:auto">
                    <li class="informacie-päta">Podpora</li>
                </a>

                <?php 

                $request_uri = $_SERVER['REQUEST_URI']; 
                $result = strpos($request_uri, 'index.php');
                if(isset($_SESSION["name"]) && $result == false){
                    echo '
                <a id="step-four" href="#" class="odkaz-päta">
                    <li class="informacie-päta">Návod</li>';
                }

                    ?>
                </a>

            </ul>

        </div>
        <div id="id05" class="modal">

            <form class="modal-content animate" action="reserve.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id05').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                    <h1 class="form__title">Otázky</h1>
                </div>

                <div class="container">

                    <div class="form__input-group"><input type="email" placeholder="Tvoj email" name="email" required>
                    </div>

                    <div class="form__input-group"><textarea type="text" placeholder="Napíš tvoju otázku..." name="text"
                            required></textarea></div>

                    <button class="form-button" name="question" type="submit">Odoslať</button>


                </div>

            </form>

        </div>
    </footer>

</section>
<script>
// Get the modal
var modal = document.getElementById('id05');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


let status = true;
const navigacia2 = document.querySelector(".navigacia");
const showNav = () => {
    if (status) {
        navigacia2.classList.add("aktiv");
        status = false;
    } else {
        navigacia2.classList.remove("aktiv");
        status = true;
    }

}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script src="main.js"></script>