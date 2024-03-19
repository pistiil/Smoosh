<?php
    include('include/twig.php');
    include('include/datacontact-en.php');
    $twig = init_twig();

    echo $twig->render('contact.twig', [
        'titre' => 'Contact Us',
        'lang' => 'en',
        'lien' => $lien,
        'titre1' => $titre1,
        'placeholder' => $placeholder,
        'contact' => $contact,
    ]);
?>