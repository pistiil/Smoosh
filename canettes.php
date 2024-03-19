<?php
    include('include/twig.php');
    include('include/data2-fr.php');
    $twig = init_twig();

    echo $twig->render('canettes.twig', [
        'titre' => 'Canettes',
        'lang' => 'fr',
        'lien' => $lien,
        'titre1' => $titre1,
        'Canette' => $categorieA,
    ]);
?>