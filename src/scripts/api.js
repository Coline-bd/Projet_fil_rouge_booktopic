const apiKey = import.meta.env.VITE_API_KEY;

const aside = document.querySelector('aside');

async function searchBook() {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    try{
    const url =`https://www.googleapis.com/books/v1/volumes?q=l'espace+d'un+an&langRestrict=fr&maxResults=40&key=${apiKey}`;
    const dataApi = await fetch(url);
    console.log(dataApi);
        // 2. On convertit la réponse brute en tableau/objet JS
            if (!dataApi.ok) {
                throw new Error("Impossible de charger le fichier JSON");
            }
        const data = await dataApi.json();
        // 3. On utilise les données reçues
        console.log("Données locales reçues :", data);
        
        const dataFr = data.items.filter(book => book.volumeInfo.language === "fr");
        console.log(dataFr)
        // const dataBooks = dataFr.items;
        dataFr.forEach(book => {
        aside.append(createCardBook(book));
        });
        }
        catch(error) {
            console.error("Erreur lors de la lecture du JSON :", error);
        };
}


// searchBook();

function createCardBook(book){
    const cardBook = document.createElement('article');
    cardBook.classList.add('cardBook');
    cardBook.innerHTML=`
        <a href="./src/pages/book.html?id=${book.id}"> <img src="${book.volumeInfo.imageLinks?book.volumeInfo.imageLinks.thumbnail:"/public/images/imgDefault.png"}" alt="${book.volumeInfo.title}"></a>
        <a href="./src/pages/book.html?id=${book.id}" class="titleCardBook"> ${book.volumeInfo.title}</a>
        <span>${book.volumeInfo.authors?.join(",")}</span>
        <span>${book.volumeInfo.categories?.join(",")}</span>
        <button class="addBtn" type="button"> Ajouter</button>
    `
    return cardBook;
}

