const searchInput = document.querySelector('#searchInput');
const searchButton = document.querySelector('#searchButton');
const resultsContainer = document.querySelector('.gridBooks');

const params = new URLSearchParams(window.location.search);
const query = params.get('q');

async function searchBook() {
    if (!query?.trim() || !resultsContainer) {
        return;
    }
    try {
        const response = await fetch(`/api/search?q=${encodeURIComponent(query)}`);
        //si la requête échoue
        if (!response.ok) {
            throw new Error("Impossible de charger le fichier JSON");
        }
        //convertir la réponse brute en objet JS
        const data = await response.json();
        //si aucun résultat trouvé
        if (!Array.isArray(data.items)) {
            resultsContainer.textContent = 'Aucun livre trouvé.';
            return;
        }
        //pour chaque données reçue, créer une card -> appel de createCardBook
        data.items.forEach((book) => {
            resultsContainer.append(createCardBook(book));
        });
    } catch (error) {
        console.error(error);
        resultsContainer.textContent = 'Impossible de charger les résultats. Réessayez plus tard.';
    }
};

searchBook();

function createCardBook(book){
    const cardBook = document.createElement('article');
    cardBook.classList.add('cardBook');
    const info = book.volumeInfo;

    const bookLink = document.createElement('a');
    bookLink.href = `/book?id=${(book.id)}`;

    const image = document.createElement('img');
    image.src = info.imageLinks?.thumbnail ?? '/images/imgDefault.png';
    image.alt = info.title ?? 'Livre';
    bookLink.append(image);

    const titleLink = document.createElement('a');
    titleLink.href = `/book?id=${(book.id)}`;
    titleLink.classList.add('titleCardBook');
    titleLink.textContent = info.title ?? 'Titre inconnu';

    const authors = document.createElement('span');
    authors.textContent = info.authors?.join(', ') ?? 'Auteur inconnu';

    const categories = document.createElement('span');
    categories.textContent =
        info.categories?.join(', ') ?? 'Catégorie inconnue';

    const addButton = document.createElement('button');
    addButton.classList.add('addBtn');
    addButton.type = 'button';
    addButton.textContent = 'Ajouter';

    cardBook.append(bookLink,titleLink,authors,categories,addButton);

    return cardBook;
}