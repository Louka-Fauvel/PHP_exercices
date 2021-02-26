<?php
include "header.php";
include("functions.php");
?>

<?php
element('Test', 'Bounjour', '5');


$tableau=[
        ["titre"=>"Exercices","contenu"=>"Liste des exercices disponibles","niveau"=>1],
        ["titre"=>"Exercice n°1","contenu"=>"Créer une fonction","niveau"=>2],
        ["titre"=>"Exercice n°2","contenu"=>"Afficher le contenu d'un tableau","niveau"=>2]
];

parseElements($tableau);

 ?>

<?php
include "footer.php";
?>
