<?php



function login(){
    global $bdd;
    extract($_POST);
    $errors = 'Cela ne correspond pas à un compte valide';
    $login = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = ?');
    $login->execute([$pseudo]);
    $login = $login->fetch();
    if(password_verify($password, $login['password'])){
        $_SESSION['user'] = $login['id'];
        header("Location: compte.php");
    }
    else{
        return $errors;
    }
}

