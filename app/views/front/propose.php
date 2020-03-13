<?php require('app/views/templates/header.php'); ?>
<main class="container">

            <h2 class="title">Vous souhaitez proposer un trajet ?</h2>
            <form id="form-propose" action="traitement.php" method="post">

<div class="infos-propose">
                <label for="start-propose">Départ :
                </label>
                <input
                    type="text"
                    id="start-propose"
                    name="start-propose"             
                    required="required">
                <label for="destination-propose">Destination :
                </label>
                <input
                    type="text"
                    id="destination-propose"
                    name="destination-propose"
                    required="required">
</div>
<div class="time-propose">

                <label for="when-propose">Quand ? :
                </label>
                <input type="date" id="when-propose" name="when-propose" required="required">
                <label for="hour-propose">A partir de quelle heure ? :</label>
                <input
                    type="time"
                    id="hour-propose"
                    name="hour-propose"
                    min="06:00"
                    max="22:00"
                    required="required"
                    >
                 </div>   
<div class="what-propose">              
            
                <label for="passenger-select">Pour qui ? :</label>

                <select name="passenger-select" id="passenger-select" required="required">
                    <option value="">  Choisissez une option  </option>
                    <option value="pet-only">Animal seulement</option>
                    <option value="pet-passenger">Animal et passager</option>
                </select>
                <label for="price-propose">Prix :
                </label>
                <input
                    type="text"
                    id="price-propose"
                    name="price-propose"             
                    required="required">
</div>
                <input class="btn-propose" type="submit" value="Continuer"> 
            </form>
            

        </main>
        
        <?php require('app/views/templates/footer.php'); ?>
        <script>menuAct(2); </script>

