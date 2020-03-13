<?php
    
    require_once 'app/views/back/functions/user.php';
    include_once 'app/views/templates/header.php';
    
    
    ?>

<main class="container">
<section class="fiche-container">
                <!--article "je Propose" -->
                <article class="ficheProfilTransporteur">
                    <figure class="iOffer">
                        <h2>Transporteur</h2>
                        <!-- Profil dutransporteur -->
                        <div id="profilTransporteur" class="profilTransporteur">
                            <img src="app/public/images/trans1.jpg" alt="photo">
                            <label for="file" class="label-file">Choisir une image</label>
                            <input id="file" class="input-file" type="file">
                            <div class="nameTransporteur">
                                <h3>Prénom : </h3>
                                <p>
                                    <span class="blod">Voiture :
                                    </span></p>
                                <p>
                                    <span class="blod">Prix :
                                    </span</p>
                                <!-- <p> <span class="blod">Taille : </span>Petit</p> -->
                            </div>
                        </div>
                        <!-- icone pour event toggle -->
                        <i class=" arrowDown fas fa-angle-down"></i>

                        <!-- description Trajet -->
                        <div class="infoTrajet">
                            <div class="trajet">
                                <h3>Départ :</h3>
                                <p>Brest</p>
                                <h3>Date :</h3>
                                <p>Mardi 17 mai 2020</p>
                            </div>

                            <div class="trajet">
                                <h3>Destination :</h3>
                                <p>Nice</p>
                                <h3>Horaire :</h3>
                                <p>6h00-8h00</p>
                            </div>

                        </div>
                        <!-- icone pour event toggle -->
                        <i class=" arrowUp fas fa-angle-up"></i>
                        <!-- Profil du propiétaitre -->
                        <div class="acceptTransporteur">
                            <p>
                                <span class="blod">Chien :
                                </span>Oui</p>
                            <p>
                                <span class="blod">Chat :
                                </span>Non</p>
                            <p>
                                <span class="blod">Rongeur :
                                </span>oui</p>
                            <p>
                                <span class="blod">Autre* :
                                </span>Non</p>
                        </div>

                    </figure>
                </article>
            </section>

</main>

<?php require 'app/views/templates/footer.php'; ?>