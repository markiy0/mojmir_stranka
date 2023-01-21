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
if (firstLogin == "Y") {
  // console.log("prvýkrát");
  intro.start();
  // document.getElementById("pozdrav").setAttribute("data") = ("N");
}
// console.log("druhýkrát");

// document
//   .querySelector(".introjs-donebutton")
//   .addEventListener("click", function () {
//     intro.end();
//   });
