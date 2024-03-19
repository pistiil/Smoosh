<?php
    include('include/twig.php');
    include('include/datacontact-fr.php');
    $twig = init_twig();

    echo $twig->render('contact.twig', [
        'titre' => 'Contact',
        'lang' => 'fr',
        'lien' => $lien,
        'titre1' => $titre1,
        'placeholder' => $placeholder,
        'contact' => $contact,
    ]);
?>