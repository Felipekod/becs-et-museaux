<?php

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

    <?php
}

function pied_page()
{
    ?>
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
      </footer>

    <?php
}


?>