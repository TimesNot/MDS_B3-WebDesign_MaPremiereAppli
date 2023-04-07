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
    // procédure
    function afficherTexte($texte){
        echo $texte;
        echo '<br />';
    }
    // fonction
    function additionner($nombre1,$nombre2){
        $somme = $nombre1 + $nombre2;
        return $somme;
    }

    function mettreEnMajuscule($texte){
        return strtoupper($texte);
    }
    function AfficherTableMultiplication($nombre){
        $resultat = " ";
        for ($i = 1; $i <= 10; $i++){
            $resultat = $resultat . $i . 'x' . $nombre . ' = ' .$i * $nombre .  '<br />';
        }
        return $resultat;
    };

    afficherTexte(mettreEnMajuscule('nickel'));
    afficherTexte('Toto');
    afficherTexte(additionner(78,45));
    afficherTexte(AfficherTableMultiplication(5));
    
    ?>


</body>
</html>