let checked = true

window.addEventListener('scroll', () => {

    if(window.scrollY > 0){
        navbar.classList.add("glass")

    } else {
        navbar.classList.remove("glass")
    }

})

let buttonnavbar = document.querySelector('.buttonnavbar');
let navbarlgpos = document.querySelector('.navbarlgpos');


buttonnavbar.addEventListener('click', () => {

  if(checked == true){
    navbarlgpos.classList.add("glass");
    navbarlgpos.style.paddingTop="1rem";
    checked = false;
  } else {
    navbarlgpos.classList.remove("glass");
    navbarlgpos.style.paddingTop="1rem";
    checked = true;
  }

})








 function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", reveal);



  // user
function toggleMinimize() {
  const buttonContainer = document.getElementById("button-container");
  buttonContainer.classList.toggle("minimized");
}
// fine user