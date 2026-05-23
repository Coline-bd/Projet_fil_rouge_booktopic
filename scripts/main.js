
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


// Dark Mode
const body=document.querySelector('body');
const themeBtn=document.querySelector('#themeBtn');
console.log(body);


themeBtn.addEventListener('click',()=>{
  if (body.classList.contains('darkTheme')){
    body.classList.add("lightTheme");
    body.classList.remove("darkTheme");
    themeBtn.innerText="mode dark";
  }
  else{
    body.classList.add("darkTheme");
    body.classList.remove("lightTheme");
    themeBtn.innerText="mode light";
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

// fermer l'onglet quand on clique à l'extérieur
document.addEventListener("click", (event) => {

  if(!navAccount.contains(event.target)) {

    navAccountMenu.classList.remove("open");
  }

});

const bookId ="5ZuhDAAAQBAJ"; 

const title =
  document.querySelector("#bookTitle");

const author =
  document.querySelector("#bookAuthor");

const description =
  document.querySelector("#bookDescription");

const cover =
  document.querySelector("#bookCover");


