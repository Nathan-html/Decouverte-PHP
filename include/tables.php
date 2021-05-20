
<!--Création d'un tableau de catégories produit : tableau à 1 entrée -->

<?php
    $tablCat = ['Chiens', 'Chats', 'Oiseaux', 'Rongeurs', 'Poissons', 'Reptiles', 'Autre'];
?>

<?php
    $tablProd = [
        //produit templat
        /*
        [
            'titre' => '',
            'cat' => '',
            'pHt' => '',
            'tva' => '',
            'def' => '',
            'imgsrc' => ''
        ],
        */
        //prod 1
        [
            'titre' => 'les chats',
            'cat' => 'Chats',
            'pHt' => '10.33',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci culpa soluta nemo officia incidunt mollitia numquam. Ducimus in, nisi architecto ut autem temporibus consectetur perferendis at, omnis porro ea debitis!',
            'imgsrc' => 'img/pexels-mermek-am-1573324.jpg'
        ],
        // prod 2
        [
            'titre' => 'les chiens',
            'cat' => 'Chiens',
            'pHt' => '10.33',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum magni velit ad incidunt in numquam facere esse quidem, earum, nulla maxime tempore quis cum perferendis debitis sequi voluptate vero voluptates.',
            'imgsrc' => 'img/pexels-lucas-andrade-4681107.jpg'
        ],
        [
            'titre' => 'les oiseaux',
            'cat' => 'Oiseaux',
            'pHt' => '5.83',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum placeat porro temporibus in eum, quia, explicabo dicta aliquam sequi, molestiae amet totam corrupti officia! Consequatur praesentium aliquam labore nam modi!',
            'imgsrc' => 'img/pexels-couleur-2317904.jpg'
        ],
        [
            'titre' => 'les rongeurs',
            'cat' => 'Rongeurs',
            'pHt' => '12.5',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quidem dolorum ducimus corrupti. Quo non repellat magnam at. Dignissimos aperiam adipisci odio a nulla tempora deserunt non maiores, voluptates accusantium!',
            'imgsrc' => 'img/pexels-satyabratasm-4001296.jpg'
        ],
        [
            'titre' => 'les poissons',
            'cat' => 'Poissons',
            'pHt' => '6,24',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis beatae corporis asperiores fugit et vitae deserunt id fugiat aspernatur, omnis error pariatur, quos doloribus delectus, repellat aliquid. Nisi, voluptates maxime.',
            'imgsrc' => 'img/pexels-valeriia-miller-3133396.jpg'
        ],
        [
            'titre' => 'les reptiles',
            'cat' => 'Reptiles',
            'pHt' => '7.5',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, veniam rem id quia laudantium inventore labore nisi maxime perspiciatis facilis commodi qui, ipsa odit? Eum, magnam ut. Corrupti, illum sequi!',
            'imgsrc' => 'img/pexels-pixabay-62289.jpg'
        ],
        [
            'titre' => '15/12/2020 feter pokemon avec nous',
            'cat' => 'Autre',
            'pHt' => '1.67',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, esse consequatur? Reprehenderit veniam incidunt totam necessitatibus maiores, rerum, porro ipsa doloribus unde tempore, a optio voluptate vel qui recusandae eum.',
            'imgsrc' => 'img/pexels-mentatdgt-1049622.jpg'
        ],
        [
            'titre' => '01/5/2021 feter l\'age du cretaser avec nous',
            'cat' => 'Autre',
            'pHt' => '1.67',
            'tva' => '20',
            'def' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex est recusandae dolorem pariatur eligendi corporis vero nihil voluptatum, non nobis eveniet cupiditate! Sit eligendi deserunt vero aperiam quis laudantium numquam.',
            'imgsrc' => 'img/pexels-rombo-3671194.jpg'
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