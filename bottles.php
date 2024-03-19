<?php
    include('include/twig.php');
    include('include/data1-en.php');
    $twig = init_twig();

    echo $twig->render('bouteilles.twig', [
        'titre' => 'Bottles',
        'lang' => 'en',
        'lien' => $lien,      
        'titre1' => $titre1,
        'Bouteille' => $categorieA,
        'Bouteilles' => $categorieB,
    ]);
?>