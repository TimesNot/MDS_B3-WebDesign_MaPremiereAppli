<?php 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

// on exécute l'API
$response = curl_exec($curl);

curl_close($curl);

// on décode la réponse de l'API
$responseJson = json_decode($response);
// On extrait l'objet "cat" de la réponse d'API
$cat = $responseJson[0];
// On extrait l'URL de l'image du chat
$imgUrl = $cat->url;
// var_dump($cat->url);


?>

<img src="<?php echo $imgUrl ?>" />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat's API</title>
</head>
<body>
    
</body>
</html> 
