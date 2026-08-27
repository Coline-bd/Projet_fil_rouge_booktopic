<?php

namespace View;

use View\Components\Header;
use View\Components\Footer;
use Models\Entities\User;

class UserView{
    private BookRepository $bookRepository;
    private CommentRepository $commentRepository;
    private User $user;

        public function __construct(){
        $this->header=new Header("Livre | Booktopic");
        $this->footer=new Footer(["../src/scripts/api.js","../scripts/book.js"]);
    }

}
    <main>
        <nav class="breadcrumb" aria-label="fil d'ariane">
            <ol>
            <li><a href="./"> Accueil</a></li>
            <li aria-current="page"> <?= $user->getLogin() ?></li>
            </ol>
        </nav>
        <h1><?= $user->getLogin() ?></h1>
        <div id="mainSection">
            <section class="containerRow">
                <div>
                    <img class="profileFoto" src="<?= $user->getPicture() ?>" alt="photo de profil">
                </div>
                <div class="containerCol">
                    <div class="containerRow">
                        <a href="#" class="pseudo"> <?= $user->getLogin() ?></a> <button class="editBtn" type="button">Modifier</button>
                    </div>
                    <div class="follow">
                        <a href="#"><span>50</span> abonnés</a>
                        <a href="#"><span>102</span> abonnements</a>
                    </div>
                    <div>
                        <ul>
                        <h4>Mes préferences</h4>
                        <?php foreach ($user->getCategories() as $category): ?>
                            <li>
                                <?= htmlspecialchars($category) ?>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <h4>A propos de moi</h4>
                    <p><?= $user->getPresentation() ?></p>
                </div>
            </section>
            <nav class="navSecond" aria-label="navigation secondaire">
                <ul>
                <li> <a href="./Library.html"> 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" focusable="false" class="iconeNav"> <path d="M384 32c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l320 0zM64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zm230.7 89.9c7.8-10.7 22.8-13.1 33.5-5.3 10.7 7.8 13.1 22.8 5.3 33.5L211.4 366.1c-4.1 5.7-10.5 9.3-17.5 9.8-7 .5-13.9-2-18.8-6.9l-55.9-55.9c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l36 36 105.6-145.2z"/></svg>
                    <span>Livres lus</span>
                </a></li>
                <li> <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" focusable="false" class="iconeNav"><path d="M48 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM48 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM96 256a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                    <span>Pile à lire</span> 
                    </a></li>
                <li> <a href="#"> 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" focusable="false" class="iconeNav"><path d="M51.9 384.9C19.3 344.6 0 294.4 0 240 0 107.5 114.6 0 256 0S512 107.5 512 240 397.4 480 256 480c-36.5 0-71.2-7.2-102.6-20L37 509.9c-3.7 1.6-7.5 2.1-11.5 2.1-14.1 0-25.5-11.4-25.5-25.5 0-4.3 1.1-8.5 3.1-12.2l48.8-89.4zm37.3-30.2c12.2 15.1 14.1 36.1 4.8 53.2l-18 33.1 58.5-25.1c11.8-5.1 25.2-5.2 37.1-.3 25.7 10.5 54.2 16.4 84.3 16.4 117.8 0 208-88.8 208-192S373.8 48 256 48 48 136.8 48 240c0 42.8 15.1 82.4 41.2 114.7z"/></svg> 
                    <span>Commentaires</span> 
                </a></li>
            </ul>
            </nav>
            <div class="filter">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" role="img" aria-label="filtrer" class="iconeNav"> <path d="M32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 224zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384z"/></svg>
                </button>
            </div>
            <div class="gridBooks">
            </div>
        </div>
        <aside>
            <h2>Suggestions</h2>
        </aside>    
    </main>
