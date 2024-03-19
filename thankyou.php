<?php
    include('include/twig.php');
    include('include/datamerci-en.php');
    $twig = init_twig();

    echo $twig->render('merci.twig', [
        'titre' => 'Thank you for your purchase!',
        'lang' => 'en',
        'titre1' => $titre1,
        'texte1' => $texte1,
        'bouton' => $bouton,
    ]);
?>