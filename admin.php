<link rel="stylesheet" href="admin.css">
<section>
    <div class="menu-prihlasenie">
        <ul class="menu-prihlasenie-ul">
            <li id="step-one" class="menu-prihlasenie-li">
                <a id="1" href="users.php" class="menu-prihlasenie-a ">Použivateľské účty</a>
            </li>

            <li id="step-two" class="menu-prihlasenie-li">
                <a id="2" href="events.php" class="menu-prihlasenie-a">Udalosti</a>
            </li>

            <li id="step-three" class="menu-prihlasenie-li">
                <a id="3" href="get-ach.php" class="menu-prihlasenie-a">Prideľovanie odznakov</a>
            </li>
        </ul>
    </div>
</section>


<script>
my_profile = document.getElementById("1");
calendar_rofile = document.getElementById("2");
activity_profile = document.getElementById("3");

if (window.location.href.split("/").pop() == "users.php") {
    my_profile.classList.remove("menu-prihlasenie-a");
    my_profile.classList.add("menu-prihlasenie-a-active");

} else if (window.location.href.split("/").pop() == "events.php") {
    calendar_rofile.classList.remove("menu-prihlasenie-a");
    calendar_rofile.classList.add("menu-prihlasenie-a-active");

} else if (window.location.href.split("/").pop() == "get-ach.php") {
    activity_profile.classList.remove("menu-prihlasenie-a");
    activity_profile.classList.add("menu-prihlasenie-a-active");

} else {

}
</script>