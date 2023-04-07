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
    
    // déclare un tableau
    $monTableau = array('Voiture','Camion','Bateau',25);
    echo '<pre>';

    print_r($monTableau);

    echo '</pre>';

    echo $monTableau[2];

    foreach ($monTableau as $uneValeur){
        echo $uneValeur. '<br />';
    };

    $monTableauAssociatif = array(
        'clef' => 'valeur',
        'nom' => 'Smith',
        'prenom' => 'Jo',
        'age' => '25',
    );

    echo '<pre>';

    print_r($monTableauAssociatif);

    echo '</pre>';

    echo $monTableauAssociatif['prenom'];
    echo '<br />';

    $tailleDeMonTableau = sizeof($monTableauAssociatif);
    echo "mon tableau fait ". $tailleDeMonTableau . " colonnes";
    echo '<br />';
    for ($i= 0; $i < $tailleDeMonTableau; $i++) {
        echo $i;
    };



    ?>
</body>
</html>