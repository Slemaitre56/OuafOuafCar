<?php 

require 'app/views/templates/header.php'; 
include_once 'app/views/back/functions/user.php';

?>
<main class="container">

            <h2 class="title">Déjà un compte ?</h2>
            <form id="form-connexion-user" action="" method="post">

<div class="connexion-user">
    <label for="email">Email:</label>
  <input type="email" id="email" name="email" required="required">
<label for="pwd">Mot de passe:</label><br>
  <input type="password" id="pwd" name="pwd" required="required">            
</div>
<input class="btn-connexion-user" type="submit" value="Se connecter"> 
            </form>

                <h2 class="title"><a href="index.php?action=inscription">Pas encore inscrit ?</a></h2>


        </main>
        
        <?php require 'app/views/templates/footer.php'; ?>
        <script>menuAct(3); </script>

