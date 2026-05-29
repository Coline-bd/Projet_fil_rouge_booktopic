import DOMPurify from "dompurify";

const apiKey=import.meta.env.VITE_API_KEY //récupération de la clé API

//Ajout de l'id du livre dans l'url de la page
const params = new URLSearchParams(window.location.search);
const bookId =params.get("id");

//Récupération des éléments de la page Livre
const title = document.querySelector("#bookTitle");
const subtitle = document.querySelector("#subtitle");
const author = document.querySelector("#bookAuthor");
const description = document.querySelector("#bookDescription");
const cover = document.querySelector("#bookCover");
const datePublication = document.querySelector("#bookPublication");
const bookEdition = document.querySelector("#bookEdition");
const category =document.querySelector("#bookCategory");
const breadcrumb = document.querySelector('#currentPage'); //fil d'arianne
const titrePage=document.querySelector('title'); //titre de la page

getBook(bookId);//appel de la fonction


async function getBook(bookId) {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    try{
        const url =`https://www.googleapis.com/books/v1/volumes/${bookId}?key=${apiKey}`;
        const dataApi = await fetch(url);
        console.log(dataApi);

        // 2. On convertit la réponse brute en tableau/objet JS
        if (!dataApi.ok) {
            throw new Error("Impossible de charger le fichier JSON");
        }
        const data = await dataApi.json();
        console.log("Données locales reçues :", data);

        // 3. On utilise les données reçues
        const info = data.volumeInfo;
        title.textContent =info.title;
        subtitle.textContent=info.subtitle;
        author.textContent = info.authors?.join(", ") || "Auteur indisponible";
        category.textContent=info.categories?.join(", ") || "Catégorie indisponible";
        description.innerHTML = DOMPurify.sanitize(info.description || "Description indisponible"); //nettoyage du texte avant d'utiliser innerHTML contre injection de code
        cover.src = info.imageLinks?.thumbnail || "/public/images/imgDefault.png";
        cover.alt = info.title;
        datePublication.textContent=info.publishedDate;
        bookEdition.textContent=info.publisher;
        titrePage.textContent=`${info.title} | Booktopic`; //titre de la page
        breadcrumb.textContent=info.title; //fil d'arianne
    }
    catch(error) {
        console.error("Erreur lors de la lecture du JSON :", error);
    };
}

