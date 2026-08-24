<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre | Booktopic</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="layout">
    <header role="banner">
        <nav role="navigation" aria-label="En tête principale">
            <button type="button" id="menu" aria-label="ouvrir le menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="iconeAction" role="img" aria-label="menu" viewBox="0 0 640 640"><path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
            </button>
            <form action="#" method="post" role="search">
                <input type="search" title="rechercher un livre" placeholder="Rechercher un livre">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="iconeAction" viewBox="0 0 640 640" role="img" aria-label="lancer la recherche"><path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z"/></svg>
                </button> 
            </form>
        </nav>
        <a href="./"> <img id="logo" src="./images/BooktopicLight.svg" alt="Logo Booktopic"></a>
        <nav role="navigation" id="navAccount" aria-label="actions paramètres de compte">
            <button type="button" id="navAccountBtn" > 
                <svg xmlns="http://www.w3.org/2000/svg" class="iconeAction" viewBox="0 0 512 512" role="img" aria-label="paramètres de compte"> <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320l-64 0c-53.5 0-99.4 32.9-118.5 79.6-35.6-37.3-57.5-87.9-57.5-143.6 0-114.9 93.1-208 208-208s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3l64 0c38.8 0 71.2 27.6 78.5 64.3zM256 512a256 256 0 1 0 0-512 256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="iconeAction" viewBox="0 0 640 640" role="img" aria-label="dérouler"><path d="M297.4 438.6C309.9 451.1 330.2 451.1 342.7 438.6L502.7 278.6C515.2 266.1 515.2 245.8 502.7 233.3C490.2 220.8 469.9 220.8 457.4 233.3L320 370.7L182.6 233.4C170.1 220.9 149.8 220.9 137.3 233.4C124.8 245.9 124.8 266.2 137.3 278.7L297.3 438.7z"/></svg>
            </button>
            <ul id="navAccountMenu">
                <li><a href="#">A propos</a></li>
                <li><label for="themeBtn">Affichage</label><button type="button" id="themeBtn" aria-label="changer le mode d'affichage">mode dark</button></li>
                <li><a href="#">Accessiblité</a></li>
                <li><a href="#">Aide et assistance</a></li>
                <li><a href="#">Signaler un problème</a></li>
                <li><a href="#">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>
    <?php require "components/navbar.php" ?>
    <main>
        <nav class="breadcrumb" aria-label="fil d'ariane">
            <ol>
                <li><a href="./"> Accueil</a></li>
                <li><a href="./library"> Livres</a></li>
                <li id="currentPage" aria-current="page"></li>
            </ol>
        </nav>
        <div id="mainSection">
            <section id="bookSection">
                <div class="containerCol">
                    <img id="bookCover">
                    <button class="addBtn" aria-label="ajouter à ma liste" type="button">Ajouter</button>
                </div>
                <div class="containerCol">
                    <h1 id="bookTitle"></h1>
                    <p id="subtitle"></p>
                    <p class="author">De <span id="bookAuthor"></span></p>
                    <p id="bookCategory"></p>
                    <div>
                        <p>Date de parution : <span id="bookPublication"></span></p>
                    </div>
                    <div>
                        <p>Edition : <span id="bookEdition"></span></p>
                    </div>
                    <p id="bookDescription"></p>
                </div>
            </section>
            <section>
                <article class="cardComment">
                    <div class="containerRow">
                        <div>
                            <img class="profileFoto" src="../../public/images/photodeprofil.png">
                        </div>
                        <div class="containerCol">
                            <a href="#" class="pseudo">Colinebd</a>
                            <span class="date">Maintenant</span>
                        </div>
                    </div>
                    <form action="/book/<?= $book->getId() ?>/comment" method="post">
                        <label for="comment">Ajouter un commentaire</label>
                        <textarea name="comment" id="reponse" placeholder="Ecrire un message" required></textarea>
                        <button type="submit">Publier</button> 
                    </form>
                </article>
                <h2>Commentaires (<span><?= $book->getNbComment() ?></span>)</h2>
                <?php foreach ($comments as $comment):?>
                <article>
                <div class="cardComment">
                <div class="containerRow">
                    <div>
                        <img class="profileFoto" src="<?= $comment->getPictureAuthor() ?>" alt="photo de profil">
                    </div>
                    <div class="containerCol">
                        <a href="#" class="pseudo"><?= $comment->getLoginAuthor() ?></a>
                        <span class="date"> <?= $comment->getDate() ?> </span>
                    </div>
                    </div>
                <p> <?= $comment->getContent() ?></p>
                <div class="actionComment">
                    <div>
                        <button type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="iconeAction"><path d="M378.9 80c-27.3 0-53 13.1-69 35.2l-34.4 47.6c-4.5 6.2-11.7 9.9-19.4 9.9s-14.9-3.7-19.4-9.9l-34.4-47.6c-16-22.1-41.7-35.2-69-35.2-47 0-85.1 38.1-85.1 85.1 0 49.9 32 98.4 68.1 142.3 41.1 50 91.4 94 125.9 120.3 3.2 2.4 7.9 4.2 14 4.2s10.8-1.8 14-4.2c34.5-26.3 84.8-70.4 125.9-120.3 36.2-43.9 68.1-92.4 68.1-142.3 0-47-38.1-85.1-85.1-85.1zM271 87.1c25-34.6 65.2-55.1 107.9-55.1 73.5 0 133.1 59.6 133.1 133.1 0 68.6-42.9 128.9-79.1 172.8-44.1 53.6-97.3 100.1-133.8 127.9-12.3 9.4-27.5 14.1-43.1 14.1s-30.8-4.7-43.1-14.1C176.4 438 123.2 391.5 79.1 338 42.9 294.1 0 233.7 0 165.1 0 91.6 59.6 32 133.1 32 175.8 32 216 52.5 241 87.1l15 20.7 15-20.7z"/></svg>
                    </button> 
                    <button type="button">35</button>
                    </div>
                    <div>
                        <button type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="iconeAction"><path d="M51.9 384.9C19.3 344.6 0 294.4 0 240 0 107.5 114.6 0 256 0S512 107.5 512 240 397.4 480 256 480c-36.5 0-71.2-7.2-102.6-20L37 509.9c-3.7 1.6-7.5 2.1-11.5 2.1-14.1 0-25.5-11.4-25.5-25.5 0-4.3 1.1-8.5 3.1-12.2l48.8-89.4zm37.3-30.2c12.2 15.1 14.1 36.1 4.8 53.2l-18 33.1 58.5-25.1c11.8-5.1 25.2-5.2 37.1-.3 25.7 10.5 54.2 16.4 84.3 16.4 117.8 0 208-88.8 208-192S373.8 48 256 48 48 136.8 48 240c0 42.8 15.1 82.4 41.2 114.7z"/></svg> 
                    </button> 
                    <span>9</span>
                    </div>
                    <button type="button">Répondre</button>
                </div>
            </div>
            <!-- <div class="responses">
                <div class="cardComment">
                    <div class="containerRow">
                        <div>
                            <img class="profileFoto" src="../../public/images/photodeprofil.png" alt="photo de profil">
                        </div>
                        <div class="containerCol">
                                <a href="#" class="pseudo"> Pseudo</a>
                                <span class="date"> 2 heures </span>
                        </div>
                        </div>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. At reiciendis quae aperiam, est non excepturi odit distinctio, explicabo qui sequi corporis voluptate? Veniam beatae quod ut, blanditiis dolores fugiat tempore?</p>
                    <div class="actionComment">
                        <div>
                            <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="iconeAction"><path d="M378.9 80c-27.3 0-53 13.1-69 35.2l-34.4 47.6c-4.5 6.2-11.7 9.9-19.4 9.9s-14.9-3.7-19.4-9.9l-34.4-47.6c-16-22.1-41.7-35.2-69-35.2-47 0-85.1 38.1-85.1 85.1 0 49.9 32 98.4 68.1 142.3 41.1 50 91.4 94 125.9 120.3 3.2 2.4 7.9 4.2 14 4.2s10.8-1.8 14-4.2c34.5-26.3 84.8-70.4 125.9-120.3 36.2-43.9 68.1-92.4 68.1-142.3 0-47-38.1-85.1-85.1-85.1zM271 87.1c25-34.6 65.2-55.1 107.9-55.1 73.5 0 133.1 59.6 133.1 133.1 0 68.6-42.9 128.9-79.1 172.8-44.1 53.6-97.3 100.1-133.8 127.9-12.3 9.4-27.5 14.1-43.1 14.1s-30.8-4.7-43.1-14.1C176.4 438 123.2 391.5 79.1 338 42.9 294.1 0 233.7 0 165.1 0 91.6 59.6 32 133.1 32 175.8 32 216 52.5 241 87.1l15 20.7 15-20.7z"/></svg>
                        </button> 
                        <button type="button">4</button>
                        </div>
                        <button type="button">Répondre</button>
                    </div>
                </div>
                <div class="cardComment">
                    <div class="containerRow">
                        <div>
                            <img class="profileFoto" src="../../public/images/photodeprofil.png" alt="photo de profil">
                        </div>
                        <div class="containerCol">
                                <a href="#" class="pseudo"> Pseudo</a>
                                <span class="date"> 2 heures </span>
                        </div>
                        </div>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. At reiciendis quae aperiam, est non excepturi odit distinctio, explicabo qui sequi corporis voluptate? Veniam beatae quod ut, blanditiis dolores fugiat tempore?</p>
                    <div class="actionComment">
                        <div>
                            <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="iconeAction"><path d="M378.9 80c-27.3 0-53 13.1-69 35.2l-34.4 47.6c-4.5 6.2-11.7 9.9-19.4 9.9s-14.9-3.7-19.4-9.9l-34.4-47.6c-16-22.1-41.7-35.2-69-35.2-47 0-85.1 38.1-85.1 85.1 0 49.9 32 98.4 68.1 142.3 41.1 50 91.4 94 125.9 120.3 3.2 2.4 7.9 4.2 14 4.2s10.8-1.8 14-4.2c34.5-26.3 84.8-70.4 125.9-120.3 36.2-43.9 68.1-92.4 68.1-142.3 0-47-38.1-85.1-85.1-85.1zM271 87.1c25-34.6 65.2-55.1 107.9-55.1 73.5 0 133.1 59.6 133.1 133.1 0 68.6-42.9 128.9-79.1 172.8-44.1 53.6-97.3 100.1-133.8 127.9-12.3 9.4-27.5 14.1-43.1 14.1s-30.8-4.7-43.1-14.1C176.4 438 123.2 391.5 79.1 338 42.9 294.1 0 233.7 0 165.1 0 91.6 59.6 32 133.1 32 175.8 32 216 52.5 241 87.1l15 20.7 15-20.7z"/></svg>
                        </button> 
                        <button type="button">4</button>
                        </div>
                        <button type="button">Répondre</button>
                    </div>
                </div>
            </div> -->
            <form action="#" method="post">
                <textarea name="reponse" id="reponse" placeholder="Ecrire un message" required></textarea>
                <button type="submit">
                    Publier
                </button> 
            </form>
            </article>
            <?php endforeach ?>
            </section>
        </div>
        <aside>
            <h2>Suggestions</h2>
        </aside>    
    </main>
    <footer>
            <h3>Légal</h3>
            <nav aria-label="liens légaux">
                <ul>
                <li> <a href="#"> Politique de confidentialité </a></li>
                <li> <a href="#"> Mentions légales </a></li>
                <li> <a href="#"> Politique de cookies </a></li>
                <li> <a href="#"> CGU </a></li>
                </ul>
            </nav>
            <p>© 2026 - Booktopic</p>
        </footer>
    <script src="./scripts/main.js"></script>
    <script src="./scripts/api.js" type="module"></script>
    <script src="./scripts/book.js" type="module"></script>
</body>
</html>