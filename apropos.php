<?php
    include('include/twig.php');
    include('include/dataapropos-fr.php');
    $twig = init_twig();

    echo $twig->render('apropos.twig', [
        'titre' => 'À Propos',
        'lang' => 'fr',
        'lien' => $lien,
        'titre1' => $titre1,
        'textehist' => $textehist,
        'fournisseurs' => $fournisseurs,
        'textecgu' => $textecgu,

    ]);
?>