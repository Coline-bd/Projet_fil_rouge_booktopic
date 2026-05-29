async function searchBooksByCategory(category) {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    try{
      const url =`https://openlibrary.org/search.json?subject=${category}&limit=20&language=fre&lang=fr`;
      // const url =`https://openlibrary.org/subjects/${category}.json?limit=20+language:fre`;
      const dataApi = await fetch(url);
      // const edition = await fetch('https://openlibrary.org/works/OL82563W/editions.json')
      // console.log(edition);
      // console.log("fetch lancé");
      // console.log(dataApi);
        // 2. On convertit la réponse brute en tableau/objet JS
      if (!dataApi.ok) {
          throw new Error("Impossible de charger le fichier JSON");
      }
      const data = await dataApi.json();
        // 3. On utilise les données reçues
      // console.log("Données locales reçues :", data);
      const dataBooks = data.docs;
      console.log(dataBooks);
      // console.log(dataBooks[0].authors[0].name);
      return dataBooks;
      
    }
    catch(error) {
      console.error("Erreur lors de la lecture du JSON :", error);
    };
}
searchBooksByCategory('fantasy');

async function loadBooks() {
  const books = await searchBooksByCategory("fantasy");
  displayBooks(books);
}
// loadBooks();

const gridBooks = document.querySelector('.gridBooks');

// gridBooks.innerHTML +=createBookCard(book);
function createCardBook(book){
  const cardBook = document.createElement('article');
  cardBook.classList.add('cardBook');
  cardBook.innerHTML=`
  <a href="#"> <img src="https://covers.openlibrary.org/b/id/${book.cover_i
}-L.jpg" alt="${book.title}"></a>
    <a href="./src/pages/book.html?id=${book.title}" class="titleCardBook"> ${book.title}</a>
    <span>${book.author_name}</span>
    <button class="addBtn" type="button"> Ajouter</button>`
    return cardBook;
}



// `<a href="#"> <img src="https://covers.openlibrary.org/b/id/${book.cover_id
// }-L.jpg" alt="${book.title}"></a>
//     <a href="./src/pages/book.html?id=${book.title}" class="titleCardBook"> ${book.title}</a>
//     <span>${book.authors[0].name}</span>
//     <button class="addBtn" type="button"> Ajouter</button>`

function displayBooks(books){
  // booksContainer.innerHTML = "";
  books.forEach(book => {
    gridBooks.append(createCardBook(book));
  });
}