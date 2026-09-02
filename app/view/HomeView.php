<?php

namespace View;

class HomeView extends View{
    private string $messageAuth="";
    private string $messageRegist="";

    public function setMessageAuth(string $messageAuth){
        $this->messageAuth=$messageAuth;
    }
    public function setMessageRegist(string $messageRegist){
        $this->messageRegist=$messageRegist;
    }
    public function launchBuffer():self{

    ob_start();
    if(isset($_SESSION["id_user"])){
    ?>
    <main role="main">
        <h1>Découvrez toutes les actualités</h1>
        <div id="mainSection">
            <h2>Commentaires</h2>
            <article>
            <div class="cardComment">
                <div class="containerRow">
                    <div>
                        <img class="profileFoto" src="./public/images/pdp5.png" alt="photo de profil">
                    </div>
                    <div class="containerCol">
                        <div>
                            <a href="/user/Margot17" class="pseudo"> Margot17</a>
                            <span>a commenté</span>
                            <a href="/book" class="titleLink">L'espace d'un an</a>
                        </div>
                        <span class="date"> 2 heures </span>
                    </div>
                    </div>
                <p> Je ne m'attendais pas à une si jolie surprise !.. Cette vision de l'évolution de l'espèce humaine après la Catastrophe est pleine d'espoir, et la vie dans cet équipage multi-espèces ne manque ni de saveur ni d'harmonie...</p>
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
            <div class="responses">
                <div class="cardComment">
                    <div class="containerRow">
                        <div>
                            <img class="profileFoto" src="./public/images/pdp2.png" alt="profil">
                        </div>
                        <div class="containerCol">
                                <a href="/user/Paulo" class="pseudo">Paulo</a>
                                <span class="date"> 2 heures </span>
                        </div>
                    </div>
                    <p> Tellement d’accord et les espèces ont toutes leurs particularités sans être comparées constamment aux humains</p>
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
                            <img class="profileFoto" src="./public/images/pdp3.png" alt="profil">
                        </div>
                        <div class="containerCol">
                                <a href="#" class="pseudo">Julie</a>
                                <span class="date"> 2 heures </span>
                        </div>
                        </div>
                    <p> Moi aussi c’est que j’ai préféré, les personnages sont très attachants et les interactions entre eux sont si bienveillantes ça fait tellement du bien.</p>
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
            </div>
            <form action="#" method="post">
                <textarea title="écrire un message" name="message" id="message" placeholder="Ecrire un message" required></textarea>
                <button type="submit">
                    Publier
                </button> 
            </form>
            </article>
            <article>
            <div class="cardComment">
                <div class="containerRow">
                    <div>
                        <img class="profileFoto" src="./public/images/pdp4.png" alt="profil">
                    </div>
                    <div class="containerCol">
                            <div>
                            <a href="#" class="pseudo">Mathieu</a>
                            <span>a commenté</span>
                            <a href="#" class="titleLink">L'espace d'un an</a>
                        </div>
                            <span class="date"> 2 heures </span>
                    </div>
                    </div>
                <p>J’ai eu un peu de mal à accrocher au début mais je trouve que le point de vue de l’auteur est intéressant, dommage que l’intrigue mette du temps à se développer.</p>
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
            <form action="#" method="post">
                <textarea title="écrire un message" name="message" id="message" placeholder="Ecrire un message" required></textarea>
                <button type="submit">
                    Publier
                </button> 
            </form>
            </article>
        </div>
        <aside>
            <h2>Livres</h2>    
        </aside>
    </main>
    </div>
    
    <?php
    }
    else {
    ?>
    <main>
        <h1>Identification</h1>
        <div id="mainSection">
        <h2>Connexion</h2>
        <form class="containerCol" action="" method="POST">
            <label for="login">Pseudo : </label>
            <input type="text" id="login" name="login" required>

            <label for="password">Mot de passe : </label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="authenticate" value="Se connecter">
        </form>
        <p><?= $this->messageAuth ?></p>
        <h2>Inscription</h2>
        <form class="containerCol" action="" method="POST">
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" required>
            <label for="lastname">Nom : </label>
            <input type="text" name="lastname" required>
            <label for="birthdate">Date de naissance : </label>
            <input type="date" name="birthdate" required>
            <label for="email">Email : </label>
            <input type="email" name="email" required>
            <label for="login">Pseudo : </label>
            <input type="text" name="login" required>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" required>
            <label for="passwordConfirmed">Confirmation du mot de passe : </label>
            <input type="password" name="passwordConfirmed" required>
            <input type="submit" name="register" value="S'inscrire">
        </form>
        <p><?= $this->messageRegist ?></p>
        </div>
    </main>
    <?php }
    $this->setBuffer(ob_get_clean());
    return $this;
    }
    }