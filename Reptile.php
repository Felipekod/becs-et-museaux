<?php
include_once('Fonctions/FonctionsBM.php');
creer_entete_html('Reptile');
entente_page();
?>
<h3>Nos amis à sang froid.</h3>
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