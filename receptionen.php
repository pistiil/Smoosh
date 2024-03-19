<?php

include('include/twig.php');
include('include/datareception-en.php');
$twig = init_twig();

echo $twig->render('reception.twig', [
    'titre' => 'Reception confirmation',
    'data' => $_POST,
	'lang' => 'en',
    'texte1' => $texte1,
    'bouton' => $bouton,
]);

?>
