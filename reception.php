<?php

include('include/twig.php');
include('include/datareception-fr.php');
$twig = init_twig();

echo $twig->render('reception.twig', [
    'titre' => 'Confirmation de récéption',
    'data' => $_POST,
	'lang' => 'fr',
    'texte1' => $texte1,
    'bouton' => $bouton,
]);

?>
