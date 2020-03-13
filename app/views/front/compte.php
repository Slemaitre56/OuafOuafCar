<?php
    
    require_once 'app/views/back/functions/user.php';
    include_once 'app/views/templates/header.php';
    
    
    ?>

<main class="container">

<h2 class="title">Bienvenue</h2>
<div class="choice-compte">
<a href="index.php?action=profil-trajet"><input class="btn-choice" type="button" value=" + Créer un trajet"></a>
<a href="index.php?action=profil-annonce"><input class="btn-choice" type="button" value=" + Créer une anonce"></a>
</div>
</main>

<?php require 'app/views/templates/footer.php'; ?>