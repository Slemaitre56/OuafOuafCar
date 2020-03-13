<?php require('app/views/templates/header.php'); ?>
        <main class="container">
            <h2 class="title">Vous cherchez un transporteur ?</h2>
            <form id="form-search" action="traitement.php" method="post">
<div class="infos-search">
                <label for="start-search">Départ :
                </label>
                <input
                    type="text"
                    id="start-search"
                    name="start-search"             
                    required="required">
                <label for="destination-search">Destination :
                </label>
                <input
                    type="text"
                    id="destination-search"
                    name="destination-search"
                    required="required">
</div>
<div class="time-search">

                <label for="when-search">Quand ? :
                </label>
                <input type="date" id="when-search" name="when-search">
                <label for="hour-search">A partir de quelle heure ? :</label>
                <input
                    type="time"
                    id="hour-search"
                    name="hour-search"
                    min="06:00"
                    max="22:00"
                    >
                 </div>   
<div class="what-search">              
                <label for="pet-select">Quel genre ? :</label>

                <select name="pet-select" id="pet-select">
                    <option value="">  Choisissez une option  </option>
                    <option value="dog">Chien</option>
                    <option value="cat">Chat</option>
                    <option value="hamster">Rongeur</option>
                    <option value="parrot">Autre</option>
                </select>
                <label for="passenger-select">Pour qui ? :</label>

                <select name="passenger-select" id="passenger-select">
                    <option value="">  Choisissez une option  </option>
                    <option value="pet-only">Animal seulement</option>
                    <option value="pet-passenger">Animal et passager</option>
                    
                </select>
</div>
                <input class="btn-search" type="submit" value="Rechercher">
            </form>
            <div class="result-search">
            </div>

        </main>
        
        <?php require('app/views/templates/footer.php'); ?>
        <script>menuAct(1); </script>