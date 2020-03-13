<?php require('app/views/templates/header.php'); ?>

        <main class="container">
            <section class="fiche-container">
                <!--article "je cherche" -->
                <article class="fiches">
                    <figure class="iSearch">
                        <h2>Chien</h2>
                        <!-- Profil de l'animal -->
                        <div id="profilPet" class="profilPet">
                            <img src="app/public/images/browny.jpg" alt="photo">
                            <div class="namePet">
                                <h3>Nom : Browny</h3>
                                <p>
                                    <span class="blod">Race :
                                    </span>Shih Tsu</p>
                                <p>
                                    <span class="blod">Taille :
                                    </span>Petit</p>
                            </div>
                        </div>
                        <!-- icone pour event toggle -->
                        <i class=" arrowDown fas fa-angle-down"></i>
                        <!-- description Trajet -->
                        <div class="infoTrajet">
                            <div class="trajet">
                                <h3>Départ :</h3>
                                <p>Rouen</p>
                                <h3>Date :</h3>
                                <p>Mardi 2 juillet 2020</p>
                            </div>

                            <div class="trajet">
                                <h3>Destination :</h3>
                                <p>Havre</p>
                                <h3>Horaire :</h3>
                                <p>8h00-20h00</p>
                            </div>
                        </div>

                        <!-- icone pour event toggle -->
                        <i class=" arrowUp fas fa-angle-up"></i>
                        <!-- Profil du propiétaitre -->
                        <div class="profilProprio">
                            <img src="app/public/images/girl-919048_640_opt.jpg" alt="portrait">
                            <div class="proprio">
                                <h3>Prénom : Nathalie</h3>
                                <p>
                                    <span class="blod">Passager :
                                    </span>
                                    Non</p>
                            </div>
                        </div>
                    </figure>

                    <!--article "je propose" -->
                    <figure class="iSearchBack">
                        <h2>Vous avez besoin d'un transporteur ?</h2>
                        <p>Besoin urgent d'emmener votre animal de compagnie et vous êtes dans
                            l'incapicité de le transporter vous même ?<br>
                            Pourquoi ne pas faire confiance à OUafOuafCar ?<br>
                            Inscrivez dès maintenant !
                        </p>
                        <button><a href="index.php?action=inscription">S'inscrire</a></button>
                    </figure>
                </article>
            </section>

            <section class="fiche-container">
                <!--article "je Propose" -->
                <article class="fichesTransporteur">
                    <figure class="iOffer">
                        <h2>Transporteur</h2>
                        <!-- Profil dutransporteur -->
                        <div id="profilTransporteur" class="profilTransporteur">
                            <img src="app/public/images/trans1.jpg" alt="photo">
                            <div class="nameTransporteur">
                                <h3>Prénom : Nathan</h3>
                                <p>
                                    <span class="blod">Voiture :
                                    </span>Moyenne</p>
                                <p>
                                    <span class="blod">Prix :
                                    </span>37 Euros</p>
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

                    <!--article "je propose" -->
                    <figure class="iOfferBack">
                        <h2>Envie d'un peu de compagnie pendant votre trajet ?</h2>
                        <p>Amoureux des animaux ou bien juste pour rendre service, pourquoi ne pas
                            rejoindre notre groupe de transporteurs ?<br>
                            Proposer un trajet et devenez un menbre de OUafOuafCar !<br>
                            Inscrivez dès maintenant !
                        </p>
                        <button><a href="index.php?action=inscription">S'inscrire</a></button>
                    </figure>
                </article>
            </section>
        </main>
        
        <?php require 'app/views/templates/footer.php';?>
        <script>menuAct(0); </script>