<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BDD</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
     
    <?php
    try
    {
        $bdd = new PDO('mysql:host=pma.mediamatique.ch;dbname=champion_de_petanque;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM champions');
    while ($donnees = $reponse->fetch())
    { 
    ?>
        <p>
        <?php echo $donnees['Nom']; ?><br />
      <span>Il a <?php echo $donnees['Age']; ?> ans.</span><br />
      <span>Il a participé à <?php echo $donnees['Nb_Particip_Championat']; ?> championat<?php if($donnees['Nb_Particip_Championat'] == 1){} else { echo "s";} ?>.</span><br />
      <span>Il a gagné <?php echo $donnees['Nb_Victoire']; ?> championat<?php if($donnees['Nb_Victoire'] == 0 || $donnees['Nb_Victoire'] == 1){} else { echo "s";} ?>.</span><br />
      <span><img src="<?= $donnees['img'];?>" alt="<?= $donnees['Nom'];?>" </span>
       </p>
    <?php
    }
    
    $reponse->closeCursor();
    
    ?>
 
</body>
</html>