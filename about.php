<?php
    include('include/twig.php');
    include('include/dataapropos-en.php');
    $twig = init_twig();

    echo $twig->render('apropos.twig', [
        'titre' => 'About',
        'lang' => 'en',
        'lien' => $lien,
        'titre1' => $titre1,
        'textehist' => $textehist,
        'fournisseurs' => $fournisseurs,
        'textecgu' => $textecgu,
    ]);
?>