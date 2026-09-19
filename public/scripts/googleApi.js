const searchInput = document.querySelector('#searchInput');
const searchButton = document.querySelector('#searchButton');
const resultsContainer = document.querySelector('.gridBooks');

    const params = new URLSearchParams(window.location.search);
    const query = params.get('q');
    
    async function searchBook() {
        if (query === '') {
            return;
        }
        console.log("test");
        const response = await fetch(
            `/api/search?q=${encodeURIComponent(query)}`
        );
        console.log('2 - réponse reçue');
        const data = await response.json();

        console.log("Réponse brute :", data);

        console.log("Données locales reçues :", data.items);
            
        // const dataFr = (data.items ??[]).filter(book => book.volumeInfo.language === "fr");
        // console.log(dataFr)
            // const dataBooks = dataFr.items;
        data.items.forEach(book => {
        resultsContainer.append(createCardBook(book));
        });
};

searchBook();

function createCardBook(book){
    const cardBook = document.createElement('article');
    cardBook.classList.add('cardBook');
    cardBook.innerHTML=`
        <a href="./src/pages/book.html?id=${book.id}"> <img src="${book.volumeInfo.imageLinks?book.volumeInfo.imageLinks.thumbnail:"/images/imgDefault.png"}" alt="${book.volumeInfo.title}"></a>
        <a href="./src/pages/book.html?id=${book.id}" class="titleCardBook"> ${book.volumeInfo.title}</a>
        <span>${book.volumeInfo.authors?.join(",")}</span>
        <span>${book.volumeInfo.categories?.join(",")}</span>
        <button class="addBtn" type="button"> Ajouter</button>
    `
    return cardBook;
}