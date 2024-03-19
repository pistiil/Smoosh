<?php
    include('include/twig.php');
    include('include/datamerci-fr.php');
    $twig = init_twig();

    echo $twig->render('merci.twig', [
        'titre' => 'Merci pour votre achat!',
        'lang' => 'fr',
        'titre1' => $titre1,
        'texte1' => $texte1,
        'bouton' => $bouton,
    ]);
?>