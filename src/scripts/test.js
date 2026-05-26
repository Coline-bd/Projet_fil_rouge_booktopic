async function searchBooksByCategory(category) {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    try{
      const url =`https://openlibrary.org/subjects/${category}.json?limit=20`;
      const dataApi = await fetch(url);
      // console.log("fetch lancé");
      // console.log(dataApi);
        // 2. On convertit la réponse brute en tableau/objet JS
      if (!dataApi.ok) {
          throw new Error("Impossible de charger le fichier JSON");
      }
      const data = await dataApi.json();
        // 3. On utilise les données reçues
      // console.log("Données locales reçues :", data);
      const dataBooks = data.works;
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
loadBooks();

const gridBooks = document.querySelector('.gridBooks');

// gridBooks.innerHTML +=createBookCard(book);
function createCardBook(book){
  const cardBook = document.createElement('article');
  cardBook.classList.add('cardBook');
  cardBook.innerHTML=`
  <a href="#"> <img src="https://covers.openlibrary.org/a/olid/OL229501A-S.jpg" alt="${book.title}"></a>
    <a href="./src/pages/book.html?id=${book.title}" class="titleCardBook"> ${book.title}</a>
    <span>${book.authors[0].name}</span>
    <button class="addBtn" type="button"> Ajouter</button>`
    return cardBook;
}
// https://covers.openlibrary.org/b/id/${book.cover_id}-m.jpg" alt="${book.title}
// async function searchCover(id,taille){
//   try{
//       const url =`https://covers.openlibrary.org/b/id/${id}-${taille}.jpg`;
//       const dataApi = await fetch(url);
//       // console.log("fetch lancé");
//       // console.log(dataApi);
//         // 2. On convertit la réponse brute en tableau/objet JS
//       console.log(dataApi);
//       if (!dataApi.ok) {
//           throw new Error("Impossible de charger le fichier JSON");
//       }
//       const data = await dataApi.json();
//         // 3. On utilise les données reçues
//       console.log(data);
//       // const dataBooks = data.works;
//       // console.log(dataBooks);
//       // console.log(dataBooks[0].authors[0].name);
     
      
//     }
//     catch(error) {
//       console.error("Erreur lors de la lecture du JSON :", error);
//     };
// }
// searchCover('10527843','s');
// <a href="./src/pages/book.html?id=${book}"> <img src="${dataTest[i]}" alt="${dataTest[i]}"></a>
function displayBooks(books){
  // booksContainer.innerHTML = "";
  books.forEach(book => {
    gridBooks.append(createCardBook(book));
  });
}