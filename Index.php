<?php
include_once('Fonctions/FonctionsBM.php');
creer_entete_html('Accueil');
entente_page();
?>
    <h1>Animalerie Becs et Museaux ‐ Accessoires et Services</h1>
    <p>C'est avec plaisir que nous vous souhaitons la bienvenue sur
    le site d'Animalerie Becs et Museaux.</p>
    <p>Une petite entreprise (à l'origine) qui a su s'épanouir avec
    le temps, nous comptons aujourd'hui plus de vingt points de service à
    travers la province. Nous vous offrons un éventail complet
    d’accessoires et de services pour vos compagnons, qu'ils aient deux 
    ou quatre pattes tout comme les plus silencieux qui vivent en
    aquarium ou dans une cage.</p>
    <p>Vous trouverez chez nous tout ce qu’il vous faut pour
    dorloter, gâter et alimenter votre petit copain ainsi qu'un personnel
    compétent qui saura répondre à vos questions concernant votre animal
    favori.</p>
    <h3>Bref historique</h3>
    <p>Animalerie Becs et Museaux ‐ Accessoires et service a ouvert
    les portes de son premier point de vente au détail en juin 1982.
    Dirigée par <em>Hélène Sinclair</em> et sa fille <em>Cindy</em>,
    toutes deux spécialisées en biologie animale et amantes des animaux,
    Animalerie Becs et Museaux s'impose rapidement comme chef de file
    local auprès des hobbyistes. La réputation croissante de l'entreprise
    mène bientôt à sa première expansion.</p>
    <p>Aujourd'hui, Animalerie Becs et Museaux est le plus important
    fournisseur de matériel pour les animaux et de services connexes en
    Amérique du Nord. Animalerie Becs et Museaux offre de tout pour vos
    animaux de compagnie, sans oublier une gamme complète d'accessoires
    et de produits spécialisés.</p>
    <p>L'entreprise compte maintenant des succursales dans la plupart
    des grandes villes de la province. N'hésitez pas à vous présenter au
    point de vente le plus près de chez vous. Notre personnel qualifié se
    fera un plaisir de répondre à vos questions.</p>
<?php
if($prenom == '')
{
    aside_page(false);
}
else{
    aside_page(true);
}
pied_page();
creer_pied_html();
?>