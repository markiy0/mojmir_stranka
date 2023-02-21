const intro = introJs();

intro.setOptions({
  steps: [
    {
      element: "#introduction",
      intro: "Welcome to our new website! Lets take a tour!",
    },
    {
      element: "#step-one",
      intro: "Please read this! Its very important!",
    },
    {
      element: "#step-two",
      intro: "You can contact us here!",
    },
    {
      element: "#step-three",
      intro: "Neviem čo tu mam napísať!",
    },
    {
      element: "#step-four",
      intro:
        "Ak by ste nevedeli čo ďalej tak tu nás najdete alebo nám napíšte na náš email",
    },
  ],
});

firstLogin = document.getElementById("pozdrav").getAttribute("data");

if (firstLogin == "Y" && localStorage.getItem("key") == null) {
  localStorage.setItem("key", "0");
  if (firstLogin == "Y" && localStorage.getItem("key") == "0") {
    // console.log("prvýkrát");

    intro.start();
    localStorage.setItem("key", "1");
  }
} // console.log("druhýkrát");

// document
//   .querySelector(".introjs-donebutton")
document.getElementById("step-four").addEventListener("click", function () {
  intro.start();
});
