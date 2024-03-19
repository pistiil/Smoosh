<?php
    include('include/twig.php');
    include('include/dataaccueil-fr.php');
    $twig = init_twig();

    echo $twig->render('accueil.twig', [
        'titre' => 'Page d\'accueil',
        'lang' => 'fr',
        'lien' => $lien,
        'titre1' => $titre1,
        'bestseller' => $bestseller,
        'histoire' => $histoire,
    ]);

?>
