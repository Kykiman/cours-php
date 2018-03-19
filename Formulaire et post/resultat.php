<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
$pseudo = $_POST["pseudo"];
$semaineDeTravail = $_POST["semaineDeTravail"];
$age = $_POST["age"];
$color = $_POST["color"];
$genre =  $_POST["genre"];
$condition = isset($_POST["condition"]);
?>

    <?php if($condition===true) { ?>
               
        <h1>Votre nom de G@m3r :</h1>
        <p><?= $pseudo ?></p>

        <h1>Etes-vous pour la semaine de 20 heures de travail ?</h1>
        <?= $semaineDeTravail;?>

        <h1>Tu es :</h1>
        <?=  $genre ;?>

        <h1>les bougies du capitaine</h1>         
            <?php  echo '<p>';
                for ( $i=0 ; $i<$age ; $i++ ) {
                    echo "I";
                    }
            echo '</p>'; ?>

        <h1>Votre couleur :</h1>
        <div class="couleur"></div>  
        <img src=<?php 
                    if($genre==='homme'){
                        echo '"homme.jpg"';
                    }
                    elseif($genre==='femme'){
                        echo '"femme.jpg"';
                    }
                    else{
                        echo '"caillou.jpg"';
             }?>  alt="image de votre genre">
     <?php   }
            else {
                echo "<h2>Tu n'as pas accepté les conditions</h2>";
            }
            ?>
</body>
<style>
   div.couleur{
    background-color: <?= $color ?>;
    height: 50px; 
    width: 150px;
   } 
</style>
</html>