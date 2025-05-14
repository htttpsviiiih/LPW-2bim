<?php
require_once("model/Card.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$card = new Card();
$card->setNome($_POST['nome']);
$card->setParente($_POST['parente']);
$card->setIdade($_POST['idade']);
$card->setForca($_POST['forca']);
$card->setLink($_POST['link']);
$card->setFraseEfeito($_POST['fraseEfeito']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic:ital,wght@0,400;0,700;1,400;1,700&family=Metamorphous&family=Quicksand:wght@300..700&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    <title>Document</title>
    <title>RiordanVerse</title>   
</head>
<body>
    <div class="container">
    <?php 

    echo $card->getCard();

    ?>
    </div>
   

</body>
</html>