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
        ?>
    <?php
}

function creer_entete_html($ID)
{
    session_start();
    
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

        <?php
            if($ID != 'Newuser' && $ID != 'Authentification')
            {
                $_SESSION['page'] = $ID;
            }
        ?>

        <body id=<?php echo $ID;?>>
          <div id="Principal">
    <?php
}


function entente_page()
{
    

    echo($_SESSION['page']);

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


function aside_page($logged, $nouveau = false)
{
    ?>
        </article>
        <aside>
<?php
            
            $prenom = isset($_SESSION['prenom'])?$_SESSION['prenom']:'';
            $nomFamille = isset($_SESSION['nomFamille'])?$_SESSION['nomFamille']:'';
            if($logged) :
?>
                <div id="Login">
                    <?php
                    echo("<p>Bienvenu $prenom $nomFamille</p>");
                    ?>
                    <p><a href="Inscription.php">Modifier mes informations</a></p>
                    <p><a href="FinSession.php">Terminer ma session</a></p>
                </div>
                <?php 
                elseif(!$nouveau) :
                ?>
                <div id="Login">
                    <form name="login" action="Authentification.php" method="post">
                        <p><label for="txtUtilisateur">Nom d'utilisateur : </label><input type="text" name="txtUtilisateur"></p>
                        <p><label for="txtMotPasse">Mot de passe : </label><input type="password" name="txtMotPasse"></p>
                        <p><input type="submit" name="btnSoumettre" value="Soumettre"> </p>
                    </form>
                </div>
                <?php
                endif;  ?>
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

function authentification($nomUtilisateur, $motPasse)
{
    ?>
        <?php
        $connection = ConnectionBD();
        if(! $connection)
        {
            //Creation d'un message qui averti l'utilisateur de l'erreur
            $message = "Il est actuellement impossible de se connecter à la base de données";
        }
        else{
            //Creation de la requete selection
            $requete = mysqli_query($connection, "SELECT * FROM tblutilisateurs WHERE NomUtilisateur = '$nomUtilisateur'
            AND MotPasse = '$motPasse' ");
            if(mysqli_num_rows($requete) != 0)
            {
                $utilisateur = mysqli_fetch_assoc($requete);
                enregistrementSession($utilisateur);
                $message = "Reussi";
            }
            else
            {
                //Creation d'un message qui averti l'utilisateur
            $message = "Il est impossible de vous authentifier.
            Soit vous n'êtes pas inscrit dans notre base de données, soit vous
            avez mal saisi vos informations d'authentification. Dans ce dernier
            cas, vérifiez votre nom d'utilisateur et votre mot de passe.";

            }
            $ok = mysqli_close($connection);
        }
        return $message;
        ?>
    <?php
}

function enregistrementSession($information)
{
    ?>
        <?php
            //inserction de données dans des variables de session.
            $_SESSION['nomUtilisateur'] = $information['NomUtilisateur'];
            $_SESSION['motPasse'] = $information['MotPasse'];
            if($information['Sexe'])
            {
            $_SESSION['sexe'] = 'M.';
            }
            else
            {
            $_SESSION['sexe'] = 'Mme';
            }
            $_SESSION['prenom'] = $information['Prenom'];
            $_SESSION['nomFamille'] = $information['Nom'];
            $_SESSION['adresse'] = $information['Adresse'];
            $_SESSION['ville'] = $information['Ville'];
            $_SESSION['province'] = $information['Province'];
            $_SESSION['codePostal'] = $information['CodePostal'];
            $_SESSION['telephone'] = $information['Telephone'];
            $_SESSION['cellulaire'] = $information['Cellulaire'];
            $_SESSION['courriel'] = $information['Courriel'];
            $_SESSION['typeAnimal'] = $information['TypeAnimal'];
            $_SESSION['nomAnimal'] = $information['NomAnimal'];
            $_SESSION['raceAnimal'] = $information['RaceAnimal'];
            $_SESSION['ageAnimal'] = $information['AgeAnimal'];
            $_SESSION['commentaires'] = $information['Commentaires'];
            $_SESSION['enregistre'] = 'true';

        ?>
    <?php
}

?>