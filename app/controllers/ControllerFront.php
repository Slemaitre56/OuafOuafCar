<?php

namespace Projet\controllers;

class ControllerFront{
    function home() {
        // $homeFront = new \Projet\Models\FrontManager();
        // $accueil = $homeFront->viewFront();

    require "app/views/front/home.php";
}

function contactFront() {
    require "app/views/front/contact.php";
}

function chercheFront() {
    require "app/views/front/cherche.php";
}
function proposeFront() {
    require "app/views/front/propose.php";
}
function connexionFront() {
    require "app/views/front/connexion.php";
}
function inscriptionFront() {
    require "app/views/front/inscription.php";

}function compteFront() {
    require "app/views/front/compte.php";
}
function profilTrajetFront() {
    require "app/views/front/profil-trajet.php";
}
}



