
//Menu burger
const burgerBtn =
  document.getElementById("menu");

const footer =
  document.querySelector("footer");

const navBarre =
  document.getElementById("navBarre");

burgerBtn.addEventListener("click", () => {

  navBarre.classList.toggle("open");
  footer.classList.toggle("open");

});


// Theme Mode dark ou light
const body=document.querySelector('body');
const themeBtn=document.querySelector('#themeBtn');

const savedTheme = localStorage.getItem("theme");

if (savedTheme){
  body.classList.add(savedTheme);
}

themeBtn.addEventListener('click',()=>{
  if (body.classList.contains('darkTheme')){ 
    body.classList.add("lightTheme");
    body.classList.remove("darkTheme");
    themeBtn.innerText="mode dark";
    localStorage.removeItem("theme");
    localStorage.setItem("theme","lightTheme");
  }
  else{
    body.classList.add("darkTheme");
    body.classList.remove("lightTheme");
    themeBtn.innerText="mode light";
    localStorage.removeItem("theme");
    localStorage.setItem("theme","darkTheme");
  }
  
})

// ouvrir onglet paramètres de compte

const navAccountBtn=document.querySelector('#navAccountBtn');
const navAccountMenu=document.querySelector('#navAccountMenu');
const navAccount=document.querySelector('#navAccount');

navAccountBtn.addEventListener('click',()=>{
  navAccountMenu.classList.toggle("open");
}
)

// fermer l'onglet paramètres quand on clique à l'extérieur
document.addEventListener("click", (event) => {

  if(!navAccount.contains(event.target)) {

    navAccountMenu.classList.remove("open");
  }

});




