<section>
    <div class="menu-prihlasenie">
        <ul class="menu-prihlasenie-ul">
            <li id="step-one" class="menu-prihlasenie-li">
                <a id="1" href="my-profile.php" class="menu-prihlasenie-a ">Môj profil</a>
            </li>

            <li id="step-two" class="menu-prihlasenie-li">
                <a id="2" href="calendar-profile.php" class="menu-prihlasenie-a">Kalendár udalostí</a>
            </li>

            <li id="step-three" class="menu-prihlasenie-li">
                <a id="3" href="activity-profile.php" class="menu-prihlasenie-a">Priebežná práca</a>
            </li>
        </ul>
    </div>
</section>


<script>
my_profile = document.getElementById("1");
calendar_rofile = document.getElementById("2");
activity_profile = document.getElementById("3");

if (window.location.href.split("/").pop() == "my-profile.php") {
    my_profile.classList.remove("menu-prihlasenie-a");
    my_profile.classList.add("menu-prihlasenie-a-active");

} else if (window.location.href.split("/").pop() == "calendar-profile.php") {
    calendar_rofile.classList.remove("menu-prihlasenie-a");
    calendar_rofile.classList.add("menu-prihlasenie-a-active");

} else if (window.location.href.split("/").pop() == "activity-profile.php") {
    activity_profile.classList.remove("menu-prihlasenie-a");
    activity_profile.classList.add("menu-prihlasenie-a-active");

} else {

}
</script>