<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$nom = "Smith"; // chaine de caractère 
$prenom = "John"; // chaîne de caractère 
$age = "25"; // nombre entier
$adresse = "1022 route de Gonk,Genk,Belgique"; // chaine de caractère 

$estEtudiant = true; // boolean

echo 'Nom : ' . $nom . "<br/>";
echo 'Prenom : ' . $prenom. "<br/>";
echo 'Age : ' . $age. "<br/>";
echo 'Adresse : ' . $adresse. "<br/>";
echo 'Est-il étudiant : ' . $estEtudiant. "<br/>";

echo "<br/>";
echo "____ opérations mathématiques ______<br/> ";

$a = 5 ;
$b = 10 ;
$c = 20 ;

$resultat = $a+$b+$c;
echo $resultat;






?>    

</body>
</html>
