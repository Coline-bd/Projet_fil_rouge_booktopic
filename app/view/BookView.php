<?php 
//<script src="./scripts/api.js" type="module"></script>
 //   <script src="./scripts/book.js" type="module"></script> 

namespace View;


use View\Components\Header;
use View\Components\Footer;
use Models\Entities\Book;
use Models\Entities\Comment;

class BookView{
    private ?string $buffer;
    private Header $header;
    private Footer $footer;
    private Book $book;
    private ?array $comments;

    public function __construct(){
        $this->header=new Header("Livre | Booktopic");
        $this->footer=new Footer("../src/scripts/api.js");
    }

    public function setComments(array $comments){
        $this->comments=$comments;
    }
    public function getComments(){
        return $this->comments;
    }
    public function setBook(Book $book){
        $this->book=$book;
    }
    public function getBook(){
        return $this->book;
    }

    public function display():void{
        echo $this->buffer;
    }

    public function displayAll(){
        $this->header->launchBuffer()->display();
        $this->launchBuffer()->display();
        $this->footer->launchBuffer()->display();
    }

    public function launchBuffer():self{
    ob_start();
    ?>
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
                    <form action="/book/<?= $this->book->getId() ?>/comment" method="post">
                        <label for="comment">Ajouter un commentaire</label>
                        <textarea name="comment" id="reponse" placeholder="Ecrire un message" required></textarea>
                        <button type="submit">Publier</button> 
                    </form>
                </article>
                <h2>Commentaires (<span><?=$this->book->getNbComment() ?></span>)</h2>
                <?php foreach ($this->comments as $comment):?>
                <article>
                <div class="cardComment">
                <div class="containerRow">
                    <div>
                        <img class="profileFoto" src="<?= $comment->getPictureAuthor() ?>" alt="photo de profil">
                    </div>
                    <div class="containerCol">
                        <a href="/profile/<?= $comment->getLoginAuthor() ?>" class="pseudo"><?= $comment->getLoginAuthor() ?></a>
                        <span class="date"> <?= $comment->getDate()->format('d/m/Y à H:i')?> </span>
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
    <?php
    $this->buffer=ob_get_clean();
    return $this;
    }
}

