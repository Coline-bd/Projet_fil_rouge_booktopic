<?php

namespace View;

class LoginView extends View{
    private string $message="";

    public function setMessage(string $message){
        $this->message=$message;
    }

    public function launchBuffer():self{
    ob_start();
    ?>

    <main>
        <h1>Identification</h1>
        <h2>Connexion</h2>
        <form action="" method="POST">
            <label for="login">Pseudo</label>
            <input type="text" id="login" name="login" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="authenticate" value="Se connecter"></input>
        </form>
        <p><?= $this->message ?></p>
        <h2>Inscription</h2>
        
    </main>
    <?php
    $this->setBuffer(ob_get_clean());
    return $this;
    }
}