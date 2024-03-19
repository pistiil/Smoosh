<?php
    include('include/twig.php');
    include('include/data3-en.php');
    $twig = init_twig();

    echo $twig->render('recettes.twig', [
        'titre' => 'Recipes',
        'lang' => 'en',
        'lien' => $lien,
        'titre1' => $titre1,
        'RecettesBouteilles' => $categorieA,
        'RecettesCanettes' => $categorieB,
    ]);
?>