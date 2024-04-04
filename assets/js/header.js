const catalogLink = document.getElementById("catalogLink");
const aboutLink = document.getElementById("aboutLink");
const contactLink = document.getElementById("contactLink");
const premiumLink = document.getElementById("premiumLink");
const contentDiv = document.getElementById("content");

aboutLink.addEventListener("click", function (event) {
  event.preventDefault();
  fetch("about.php")
    .then((response) => response.text())
    .then((html) => {
      contentDiv.innerHTML = html;
    });
});

contactLink.addEventListener("click", function (event) {
  event.preventDefault();
  fetch("contact.php")
    .then((response) => response.text())
    .then((html) => {
      contentDiv.innerHTML = html;
    });
});

catalogLink.addEventListener("click", function (event) {
  event.preventDefault();
  fetch("catalog.php")
    .then((response) => response.text())
    .then((html) => {
      contentDiv.innerHTML = html;
    });
});

premiumLink.addEventListener("click", function (event) {
  event.preventDefault();
  fetch("premium.php")
    .then((response) => response.text())
    .then((html) => {
      contentDiv.innerHTML = html;
    });
});
