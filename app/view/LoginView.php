<?php

namespace View;

class LoginView extends View{
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
    <?php
    $this->setBuffer(ob_get_clean());
    return $this;
    }
}