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


//Dark Mode
const body=document.querySelector('body');
const themeBtn=document.querySelector('#themeBtn');
console.log(body);

themeBtn.addEventListener('click',()=>{
  body.classList.toggle("darkTheme");
  themeBtn.innerText="light";
})

//onglet paramètres de compte

const navAccountBtn=document.querySelector('#navAccountBtn');
const navAccount=document.querySelector('#navAccount');

navAccountBtn.addEventListener('click',()=>{
  navAccount.classList.toggle("open");
}
)