<?php
include_once('Fonctions/FonctionsBM.php');
creer_entete_html('Chat');
entente_page();
$prenom = isset($_SESSION['prenom'])?$_SESSION['prenom']:'';
?>
<h3>Nos amis les félins.</h3>
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