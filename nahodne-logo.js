let dayList = new Array(
  "CervenyKostol.png",
  "DrevenyKostol.png",
  "Hrad.png",
  "Radnica.png",
  "Reduta.png",
  "Zvonica.png"
);

//pole názvov obrázkov

let textList = new Array("Hneď vedľa staršieho dreveného artikulárneho kostola v Kežmarku stojí novší evanjelický chrám z konca 19. storočia. Dôvodom na jeho stavbu bol vtedy chátrajúci drevený kostolík. Kostol je zmesou rôznych štýlov, má byzantské, románske, renesančné, maurské a orientálne prvky. ... klikni sem", "Drevený artikulárny kostol v Kežmarku pochádza z čias náboženskejneslobody protestantov. Artikulárne kostoly museli stáť na mimo mestských hraníc. Na ich stavbu sa nesmel použiť kameň ani železo. Kostol je vzácnou historickou pamiatkou a od roku 2008 je v zápise UNESCO ... klikni sem", "Kežmarský hrad je jediným úplne zachovaným hradom na Spiši. Prvá písomná zmienka o ňom je z roku 1463. V súčasnosti sú v ňom sprístupnené historické expozície, dokumentujúce vývoj Kežmarku a okolia ... klikni sem", "Dominantou Hlavného námestia je radnica. Na mieste križovatiek dvoch ulíc bola postavená v roku 1461. Pod radnicou sa nachádza stará pivnica. Podľa povesti vedie z pivnice úniková podzemná chodba. V súčasnosti je sídlom mestského úradu ... klikni sem", "Na mieste reduty stála v minulosti strážna veža. V roku 1818 sa budova prestavala v klasicistickom slohu na redutu. Bola určená pre stráže, hostí a zábavu. V súčasnosti sa tu nachádza kino, rôzne inštitúcie alebo obchodíky ... klikni sem", "V blízkosti Baziliky sv. Kríža v Kežmarku sa nachádza vzácna kultúrna pamiatka, renesančná zvonica zo 16. storočia, ktorá je považovaná za najkrajšiu zvonicu na Slovensku. Na zvonici sú tri zvony. Legenda hovorí, že jeden zo zvonov na Zelený štvrtok odlieta do Ríma ... klikni sem")

let linkList = new Array("https://www.kamnavylet.sk/sk/atrakcia/novy-evanjelicky-kostol-kezmarok", "https://profil.kultury.sk/sk/evanjelicky-dreveny-artikularny-kostol-v-kezmarku/", "https://www.kezmarok.com/?Kezmarsky-hrad",  "https://elro.kezmarok.sk/2021/05/08/radnica/", "https://elro.kezmarok.sk/2021/05/08/reduta/", "https://elro.kezmarok.sk/2021/05/07/renesancna-zvonica/")

//pole textov
//musia byť v rovnakom poradí podĺa toho ako chceme ich mať spolu zobrazené

var random = Math.floor(Math.random() * 6);
// random generátor čísel generuje 5 čísel (0-4), z poľa vyberáš objekty (0-4)
const img = document.getElementById("img");
const text = document.getElementById("text");
const link = document.getElementById("link");
// dávam si premenných elementy podľa id s ktorými chcem pracovať - pole pre obrázok a pole pre text
// console.log(dayList[random]);
img.src = "Loga png/" + dayList[random];

// nastaví elementu img zdroj z poľa podľa vygenerovaného čísla
text.textContent = textList[random];

// nastaví elementu text, textový obsah, ktorý chce vložiť do elemntu text z poľa podľa vygenerovaného čísla

link.href = linkList[random];