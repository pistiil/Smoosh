<?php
    include('include/twig.php');
    include('include/data1-fr.php');
    $twig = init_twig();

    echo $twig->render('bouteilles.twig', [
        'titre' => 'Bouteilles',
        'lang' => 'fr',        
        'lien' => $lien,
        'titre1' => $titre1,
        'Bouteille' => $categorieA,
        'Bouteilles' => $categorieB,
    ]);
?>