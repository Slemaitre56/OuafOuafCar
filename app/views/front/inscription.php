<?php 

require_once 'app/views/back/functions/user.php';
include_once 'app/views/templates/header.php';

?>

<main class="container">

            <h2 class="title">Pas encore inscrit ?</h2>
            <form id="form-inscription-user" action="" method="post">

<div class="inscription-user">
<label for="fname">Prénom:</label>
  <input type="text" id="fname" name="fname" required="required">
  <label for="lname">Nom:</label><br>
  <input type="text" id="lname" name="lname" required="required">
</div>
<div class="inscription-user"> 
    <label for="email">Email:</label>
  <input type="email" id="email" name="email" required="required">
<label for="pwd">Mot de passe:</label><br>
  <input type="password" id="pwd" name="pwd" required="required">            
</div>
<input class="btn-inscription-user" type="submit" value="Se connecter"> 
            </form>

                <h2 class="title"><a href="index.php?action=connexion">Déjà un compte ?</a></h2>


        </main>
        
        <?php require 'app/views/templates/footer.php'; ?>
        >

