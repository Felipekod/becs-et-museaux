<?php

function ConnectionBD()
{
    ?>
        <?php 
        // creation de la connexion à MySQL
        $db = mysqli_connect('localhost', 'root');
        $ok = mysqli_select_db($db, 'becsetmuseaux');
        if(! $ok)
        {
            //S'il est impossible de selectionner la base de données
            $ok = mysqli_close($connection);
        }
        else
        {
            //Initialisation du "charset"
            mysqli_set_charset($db, 'utf8');

            //retour de la chaine de connexion à la fonction appelante
            return $db;
        }
}

function creer_entete_html($ID)
{
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf‐8" />
            <title>Animalerie Becs et Museaux</title>
            <link rel="stylesheet" href="../CSS/Animalerie.css" />
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
            <!‐‐[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"> </script>
            <![endif]‐‐>
        </head>
        <body id=<?php echo $ID;?>>
          <div id="Principal">
    <?php
}


function entente_page()
{
    ?>
        <header>
            <img id="logo" src="images/logo.gif" alt="logo" />
            <h1 id="Titre">Animalerie Becs et Museaux </h1>
            <nav>
                <ul id="nav">
                    <li id="Nav-Accueil"><a href="index.php">Accueil</a></li>
                    <li id="Nav-Chien"><a href="Chat.php">Les chats</a></li>
                    <li id="Nav-Poisson"><a href="Poisson.php">Les poissons</a></li>
                    <li id="Nav-Oiseau"><a href="Oiseau.php">Les oiseaux</a></li>
                    <li id="Nav-Reptile"><a href="Reptile.php">Les reptiles</a></li>
                    <li id="Nav-Rongeur"><a href="Rongeur.php">Les ronguers</a></li>
                    <li id="Nav-Produit"><a href="Produit.php">Les produits</a></li>
                    <li id="Nav-Discussion"><a href="Discussion.php">Les échanges</a></li>
                </ul>
            </nav>
        </header>
        <section id="Contenu">
            <article>

    <?php
}


function aside_page()
{
    ?>
        </article>
        <aside>
                <div id="Login">
                    <form name="login" action="*" method="post">
                        <p><label for="txtUtilisateur">Nom d'utilisateur : </label><input type="text" name="txtutilisateur"></p>
                        <p><label for="txtPassword">Mot de passe : </label><input type="password" name="txtPassword"></p>
                        <p><input type="submit" name="btnSoumettre" value="Soumettre"> </p>
                    </form>
                </div>
                <div id="Info">
                        <h3>Événements à venir</h3>
                        <p>Le 24 juin prochain : Ouverture du salon de l'animal de compagnie au Centre des congrès de Québec.</p>
                </div>
        </aside>
    </section>

    
    <?php
}

function pied_page()
{
    ?>
            </article>
        </section>    
      <footer>
        <div id="Images">
            <h3 id="titre_pied">Photo du mois</h3>
            <img src="Images/Chiot_Dort.jpg" alt="Chiot qui dort"/>
            <img src="Images/Chat_Siamois.jpg" alt="Chat siamois"/>
            <img src="Images/Boa_Albinos.jpg" alt="Boa Albinos"/>
            <img src="Images/Golden.jpg" alt="Maman et bébé golden"/>
            <img src="Images/hamster_Bébé.jpg" alt="bébé hamster"/>
            <img src="Images/Himalayen_2.jpg" alt="chat himalayen"/>
            <img src="Images/Lézard_2.jpg" alt="L'anolis vert"/>
            <img src="Images/Souris_1.jpg" alt="Souris blanches"/>
            <img src="Images/Betta.png" alt="Poisson betta"/>
        </div>
        <div id="Legal">
            <h3>Politiques et conditions</h3>
            <ul>
                <li><a href="Confidentialite.html">Politique de confidentifalité</a></li>
                <li><a href="Utilisation.html">Conditions d'utilisation</a></li>
                <li><a href="#">Aide</a></li>
                <li>Ce site a été créé par<a href="http://www.collegecdi.ca">TechNet Inc.</a></li>
                <li><small><sup>&copy</sup>2012 Animalerie becs et museaux</small></li>
            </ul>
        </div>
        <div id="Liens">
            <h3>Liens utiles et conseils</h3>
            <ul>
            <li><a href="http://www.eleveurs.ca/">Site répertoire des éleveurs de chies au Canada</a></li>
            <li><a href="http://www.spca.com/">Société pour la prévention de la cruauté envers les animaux</a></li>
            <li><a href="http://www.trouvetonchien.com/">Pour trouver votre animal de compagnie</a></li>
            <li><a href="Achat.html">Quelques conseils avant d'acheter votre animal de compagnie</a></li>
            </ul>
        </div>

      </footer>

    <?php
}

function creer_pied_html()
{
    ?>
              </div>
            </body>
        </html>
    <?php
}


?>