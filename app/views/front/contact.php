<?php require('app/views/templates/header.php'); ?>


        <main class="container">
            <h2 class="titreForm">Formulaire de contact</h2> 
            <form class="body-contact"  action="traitement.php" method="post">  
             
            <div class="form">
                <input type="text" name="name" id="nom" autocomplete="off" onchange="this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);" required>
                <label for="name" class="nameLabel">
                    <span class="nameContent" >Nom</span>
                </label>
                <span id="validNom" class="reset"></span>
            </div>
            <div class="mail">
                <input type="text" name="email" id="mail" autocomplete="off" onchange="this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);" required>
                <label for="email" class="mailLabel">
                    <span class="mailContent">Mail</span>
                </label>
                <span id="validMail" class="reset"></span>     
            </div>
            <div class="text">
                <input type="textarea" name="text" id="message" autocomplete="off" required>
                <label for="text" class="textLabel">
                    <span class="textContent">Message</span >
                </label>
                <span id="validText" class="reset"></span>     
            </div>
            <div class="btnForm">
                <input type="submit" value="Envoyer" id="submit" class="btn">
                <input type="reset" value="Annuler" id="reset" class="btn">
            </div>
        </form>
                               

           

        </main>

        <?php require('app/views/templates/footer.php'); ?>
        <script>menuAct(4); </script>