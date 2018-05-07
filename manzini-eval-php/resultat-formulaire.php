<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>resultat</title>
</head>

<body>
    <?php
$nom = $_POST["nom"];
$nbrVictoire = $_POST["nbrVictoire"];
$age = $_POST["age"];
$methodeTir = $_POST["methodeTir"];
?>
        <h1>Vous vous appelez <?= $nom?></h1>
        <p>Vous avez gagné <?= $nbrVictoire?> championats !</p>
        <p>Vous avez <?= $age?> ans !</p>
        <p>Vous aimez
            <?php 
    if($methodeTir === "pointes") 
    {echo "pointer";}
    else
    {echo "tirer";}?> !
        </p>
</body>

</html>