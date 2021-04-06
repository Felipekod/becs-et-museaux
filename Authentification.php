<?php

session_start();


$nomUtilisateur = $_POST['txtUtilisateur'];
$motPasse = $_POST['txtMotPasse'];
$page_precedente = $_SESSION['page'];
// include_once('Fonctions/FonctionsBM.php');
require('Fonctions/FonctionsBM.php');
creer_entete_html('Authentification');
entente_page();

$message = authentification($nomUtilisateur, $motPasse);
if($message == "Reussi")
{
    echo("teste");
    echo("$nomUtilisateur");
   echo("$page_precedente");
   header("location: $page_precedente.php");
}
else
{
    echo("<p>Un problème est survenu lors de votre tentative d'authentification sur notre site.</p>");
    echo("<p>$message</p>");
    echo("<p>Réessayez plus tard.</p>");
    echo("<p>Cliquez <a href=\"$page_precedente.php\">ici</a> pour continuer votre visite sur notre site.</p>");
}
aside_page(false);
pied_page();
creer_pied_html();



?>