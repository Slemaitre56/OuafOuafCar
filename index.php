<?php

// important pour la sécurité de vos fichiers : les sessions
// Démarre une session
session_start();

// autoloard.php généré avec Composer
require_once __DIR__. "/vendor/autoload.php";


// en cas d'erreurs
try {
    $controllerFront = new \Projet\controllers\ControllerFront();
// isset = different de nul
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "contact") {
            $controllerFront->contactFront();
        } elseif ($_GET["action"] == "cherche") {
            $controllerFront->chercheFront();
        } elseif ($_GET["action"] == "propose") {
            $controllerFront->proposeFront();
        } elseif ($_GET["action"] == "connexion") {
            $controllerFront->connexionFront();
        } elseif ($_GET["action"] == "inscription") {
            $controllerFront->inscriptionFront();
        } elseif ($_GET["action"] == "home") {
            $controllerFront->home();
        } elseif ($_GET["action"] == "compte") {
            $controllerFront->compteFront();
        }elseif ($_GET["action"] == "profil-trajet") {
            $controllerFront->profilTrajetFront();
        }
    }
     else{
        $controllerFront -> home();
    }
} catch (Exception $e) {
    require "app/views/frontend/errorLoading.php";
} 