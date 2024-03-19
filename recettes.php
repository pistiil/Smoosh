<?php
    include('include/twig.php');
    include('include/data3-fr.php');
    $twig = init_twig();

    echo $twig->render('recettes.twig', [
        'titre' => 'Recettes',
        'lang' => 'fr',
        'lien' => $lien,
        'titre1' => $titre1,
        'RecettesBouteilles' => $categorieA,
        'RecettesCanettes' => $categorieB,
    ]);
?>