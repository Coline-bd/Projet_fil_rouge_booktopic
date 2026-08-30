<?php

namespace Controllers;

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
                $this->view->setMessage('Veuillez remplir tous les champs');
                return;
            }
                
            //Vérification du format d'email
            // if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            //     $this->view->setMessage('Email pas au bon format');
            //     return;
            // }

            //Nettoyer les datas
            $email = Tools::sanitize($_POST['login']);
            $password = Tools::sanitize($_POST['password']);

            //3. Demander au model d'aller trouver le compte utilisateur
            //a. Donner l'email au Model, puis le Model lance findByEmail
            $user=$this->repository->findByLogin($login);

            //b. Vérifier la réponse : si je reçois un tableau de donnée utilisateur, ou un false
            if(!$user){
                $this->view->setMessage('Identifiants incorrects');
                return;
            }

            //4. Vérifier les mots de passe
            if(!password_verify($password, $user->getPassword())){
                //si l'email ne correspond à aucun compte
                $this->view->setMessage('Identifiants incorrects');
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
}
