<?php

namespace Controllers;

use DateTimeImmutable;
use Models\Entities\User;
use Models\Repository\Repository;
use View\View;
use Tools\Tools;

class LoginController{

    private Repository $repository;
    private View $view;

    public function __construct(Repository $repository,View $view){
        $this->repository=$repository;
        $this->view=$view;
    }
    
    public function render(){
        $this->view->displayAll();
    }

    public function login():void{
        //1. Vérifier que l'on reçoive le formulaire de connexion
        if(isset($_POST['authenticate'])){
            
            //2. Vérifier les champs : champs vide, format des données, nettoyage
            if(empty($_POST['login']) || empty($_POST['password'])){
                $this->view->setMessageAuth('Veuillez remplir tous les champs');
                return;
            }

            //Nettoyer les datas
            $login = Tools::sanitize($_POST['login']);
            $password = Tools::sanitize($_POST['password']);

            //3. Demander au model d'aller trouver le compte utilisateur
            //a. Donner l'email au Model, puis le Model lance findByEmail
            $user=$this->repository->findByLogin($login);

            //b. Vérifier la réponse : si je reçois un tableau de donnée utilisateur, ou un false
            if($user == null){
                $this->view->setMessageAuth('Identifiants incorrects');
                return;
            }

            //4. Vérifier les mots de passe
            if(!password_verify($password, $user->getPassword())){
                //si l'email ne correspond à aucun compte
                $this->view->setMessageAuth('Identifiants incorrects');
                return;
            }
                            
            //5. Connecter l'utilisateur
            $_SESSION['id_user'] = $user->getId();
            $_SESSION['pseudo_user'] = $user->getLogin();
            $_SESSION['email_user'] = $user->getEmail();
            $_SESSION['id_role'] = $user->getRoleId();

            //6. Redirection vers la page d'accueil
            header('Location: /');
        }            
    }

    public function register(){
        if(isset($_POST['register'])){
            
            //2. Vérifier les champs : champs vide, format des données, nettoyage
            if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['login']) || empty($_POST['birthdate']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['passwordConfirmed'])){
                $this->view->setMessageRegist('Veuillez remplir tous les champs');
                return;
            }
            
            //Vérification du format d'email
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $this->view->setMessageRegist('Email pas au bon format');
                return;
            }

            //Nettoyer les datas
            $email = Tools::sanitize($_POST['email']);
            $pseudo=Tools::sanitize($_POST["login"]);
            $firstname=Tools::sanitize($_POST["firstname"]);
            $lastname=Tools::sanitize($_POST["lastname"]);
            $birthdate=Tools::sanitize($_POST["birthdate"]);
            $password = Tools::sanitize($_POST['password']);
            $passwordConfirmed=Tools::sanitize($_POST['passwordConfirmed']);

            //Vérifier si l'adresse email existe déjà
            $data=$this->repository->findByEmail($email);

            //Vérifier la réponse
            if($data !== null){
                $this->view->setMessageRegist("Cet email est déjà utilisé");
                return;
            }
            //Vérifier si le pseudo existe déjà
            $data=$this->repository->findByLogin($pseudo);

            //Vérifier la réponse : si je reçois un tableau de donnée utilisateur, ou un false
            if($data !== null){
                $this->view->setMessageRegist("Ce pseudo n'est pas disponible");
                return;
            }
            //Vérifier taille du pseudo
            if (mb_strlen($pseudo) > 50) {
                $this->view->setMessageRegist("Le pseudo est trop long");
            return;
        }
            //Vérifier taille du mot de passe
            if (strlen($password) < 8) {
                $this->view->setMessageRegist("Le mot de passe doit contenir au moins 8 caractères");
                return;
            }
            // Vérifier si les 2 mots de passes correspondent
            if($password!==$passwordConfirmed){
                $this->view->setMessageRegist("Les mots de passe ne sont pas identiques");
                return;
            }

            //Hasher le mot de passe
            $passwordHashed=Tools::passwordHash($password);

            //récupération des données rentrées
            $user=new User(null,$firstname,$lastname,$pseudo,$email,$birthdate,$passwordHashed["message"],null,null,null,2);

            //Création du compte dans la database
            $this->repository->create($user);

            //Message de confirmation 
            $this->view->setMessageRegist("Inscription confirmée. Vous pouvez désormais vous connecter");
        }
    }
}