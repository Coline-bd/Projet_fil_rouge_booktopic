function getBook() {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    // Le chemin dans le fetch() est relatif au fichier HTML, PAS au fichier JS.
    const url =`https://www.googleapis.com/books/v1/volumes/${bookId}?key=${API_KEY}`;
    console.log("fetch lancé");

    fetch(url)
        // 2. On convertit la réponse brute en tableau/objet JS
        .then(response => {
            if (!response.ok) {
                throw new Error("Impossible de charger le fichier JSON");
            }
            return response.json();
        })
        // 3. On utilise les données reçues
        .then(data => {
            console.log("Données locales reçues :", data);
            const info = data.volumeInfo;
            // Exemple d'affichage dans la console
          title.textContent =
          info.title;

        author.textContent =
          info.authors?.join(", ");

        description.textContent =
          info.description;

        cover.src =
          info.imageLinks?.thumbnail;

        cover.alt =
          info.title;
        
          })
        .catch(error => {
            console.error("Erreur lors de la lecture du JSON :", error);
        });
}

// getBook();