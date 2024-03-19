<?php
    include('include/twig.php');
    include('include/data2-en.php');
    $twig = init_twig();

    echo $twig->render('canettes.twig', [
        'titre' => 'Cans',
        'lang' => 'en',
        'lien' => $lien,
        'titre1' => $titre1,
        'Canette' => $categorieA,
    ]);
?>