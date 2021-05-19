
<!--Création d'un tableau de catégories produit : tableau à 1 entrée -->

<?php
    $tablCat = ['Chiens', 'Chats', 'Oiseaux', 'Rongeurs', 'Poissons', 'Reptiles', 'Autre'];
?>

<?php
    $tablProd = [
        //prod 1
        [
            'titre' => 'croquettes pour chien',
            'cat' => 'chien',
            'def' => 'un paquet de croquette pour chien',
            'imgsrc' => 'img/croquettes-sans-cereales-pour-chats-adultes-sterilises-ou-d-interieur.jpg',
        ],
        // prod 2
        [
            'titre' => 'croquettes pour chat',
            'cat' => 'chat',
            'def' => 'un paquet de croquette pour chat',
            'imgsrc' => 'img/croquettes-super-premium-pour-chiens-de-grande-taille.jpg',
        ],
    ];
?>

<!--Methode 1 Parcours du tableau pour afficher les catégories-->

<!--
foreach($monTableauCategories as $uneCategorie):
    echo $uneCategorie;
endforeach;
-->


<!--Methode 2 avec {}-->

<!--
foreach($monTableauCategories as $uneCategorie){
    echo $uneCategorie;
}
-->