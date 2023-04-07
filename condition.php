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
    // Constante
    define('VITESSE_Maximum',50);
    // je défini ma vitesse
    $vitesse = 90;

    if ($vitesse > VITESSE_Maximum){
        echo 'Vous roulez trop vite';
    }else{
        echo 'vous roulez tranquillement';
    }
    
    echo '<br /> Enchainement de condtion <br /> ';
    $classePerso = 'nain';

    if($classePerso === 'elfe'){
        echo 'Vous êtes un elfe !';
        echo '<br />';
        echo 'J\'ai de grandes oreilles';
    }elseif($classePerso === 'humain'){
        echo 'Vous êtes un humain !';
        echo '<br />';
        echo 'J\'ai des grands pieds';
    }elseif($classePerso === 'nain'){
        echo 'Vous êtes un nain !';
        echo '<br />';
        echo 'J\'aime la bière';
    }else{
        echo 'vous n\'existez pas';
    }

    echo '<br />';
    echo '<br />';
    echo '<br />';
    echo '<br />';

    switch($classePerso){
        case 'elfe':
        echo 'Vous êtes un elfe !';
        echo '<br />';
        echo 'J\'ai de grandes oreilles';
        break;
            case 'humain':
                echo 'Vous êtes un humain !';
                echo '<br />';
                echo 'J\'ai des grands pieds';
                break;
                case 'nain':
                    echo 'Vous êtes un nain !';
                    echo '<br />';
                    echo 'J\'aime la bière';
                    break;
                    default:
                    echo 'vous n\'existez pas';
    }
    echo '<br />';
    echo '<br />';
    for ($i = 0; $i <= 10; $i++){
        echo ($i .'x'. '9' . ' = ' .$i * 9);
        echo '<br />';
    }





    ?>
</body>
</html>