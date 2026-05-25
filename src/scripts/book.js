const apiKey=import.meta.env.VITE_API_KEY

// const info = {
//             "title": "L'Espace d'un an",
//             "subtitle": "Les Voyageurs, T1",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publisher": "L'Atalante",
//             "publishedDate": "2020-11-26",
//             "description": "Premier volume des « Voyageurs », série lauréate du prestigieux prix Hugo, L’Espace d’un an signe les débuts de Becky Chambers, dont la plume et les récits ont bouleversé la science-fiction. Rosemary, jeune humaine inexpérimentée, fuit sa famille de richissimes escrocs. Elle est engagée comme greffière à bord du Voyageur, ...",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782367934372"
//                 },
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2367934371"
//                 }
//             ],
//             "readingModes": {
//                 "text": true,
//                 "image": true
//             },
//             "pageCount": 421,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": true,
//             "contentVersion": "1.25.24.0.preview.3",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "imageLinks": {
//                 "smallThumbnail": "http://books.google.com/books/content?id=5ZuhDAAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api",
//                 "thumbnail": "http://books.google.com/books/content?id=5ZuhDAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=5ZuhDAAAQBAJ&printsec=frontcover&dq=inauthor:becky+chambers&hl=&cd=4&source=gbs_api",
//             "infoLink": "https://play.google.com/store/books/details?id=5ZuhDAAAQBAJ&source=gbs_api",
//             "canonicalVolumeLink": "https://play.google.com/store/books/details?id=5ZuhDAAAQBAJ"
//         };

const params = new URLSearchParams(window.location.search);

const bookId =params.get("id");

//Page livre
const title = document.querySelector("#bookTitle");

const subtitle = document.querySelector("#subtitle");

const author = document.querySelector("#bookAuthor");

const description = document.querySelector("#bookDescription");

const cover = document.querySelector("#bookCover");

const datePublication = document.querySelector("#bookPublication");

const bookEdition = document.querySelector("#bookEdition");

const category =document.querySelector("#bookCategory");

// const bookId ="5ZuhDAAAQBAJ"; 



async function getBook(bookId) {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    try{
    const url =`https://www.googleapis.com/books/v1/volumes/${bookId}?key=${apiKey}`;
    console.log("fetch lancé");

    const dataApi = await fetch(url)
        // 2. On convertit la réponse brute en tableau/objet JS
        if (!dataApi.ok) {
            throw new Error("Impossible de charger le fichier JSON");
            }
        const data = await dataApi.json();
        
        // 3. On utilise les données reçues
        console.log("Données locales reçues :", data);
        const info = data.volumeInfo;
        const breadcrumb = document.querySelector('#currentPage');
        breadcrumb.textContent=info.title;
        title.textContent =info.title;
        subtitle.textContent=info.subtitle;
        author.textContent = info.authors?.join(", ");
        category.textContent=info.categories?.join(",");
        description.innerHTML=info.description || "Description indisponible";
        cover.src = info.imageLinks?.thumbnail;
        cover.alt = info.title;
        datePublication.textContent=info.publishedDate;
        bookEdition.textContent=info.publisher;
        
        }
        catch(error) {
            console.error("Erreur lors de la lecture du JSON :", error);
        };
}

// getBook(bookId);