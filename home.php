<?php
    include('include/twig.php');
    include('include/dataaccueil-en.php');
    $twig = init_twig();

    echo $twig->render('accueil.twig', [
        'titre' => 'Home',
        'lang' => 'en',
        'lien' => $lien,
        'titre1' => $titre1,
        'bestseller' => $bestseller,
        'histoire' => $histoire,
    ]);
?>