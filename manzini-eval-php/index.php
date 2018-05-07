<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>

<body>
    <h1>Eval php de Kylian Manzini sur la pétanque</h1>
    <h2>Formulaire à propos de la pétanque :</h2>
    
    <form method="POST" action="resultat-formulaire.php">
        <p>
            <label for="nom">Votre nom :</label>
            <input type="text" name="nom" id="nom">
        </p>
        <p>
            <label for="nbrVictoire">Combien avez-vous de victoire ?</label>
            <input type="number" name="nbrVictoire" id="nbrVictoire">
        </p>
        <p>
            <label for="age">Quel age avez-vous ?</label>
            <input type="number" name="age" id="age" min="60">
            <!-- min="60" car il faut avoir minimum 60 ans pour jouer à la pétanque-->
        </p>
        <p>
            <label for="methodeTir"> Tu tires ou tu pointes ?</label>
            <select name="methodeTir" id="methodeTir">
                <option value="pointes">Pointes</option>
                <option value="tires">Tires</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Valider" />
        </p>
    </form>

    <h2>Célébrités</h2>
    <p>
        <a href="star.php?celebrite=Michel">Michel</a>
    </p>
    <p>
        <a href="star.php?celebrite=Gérard">Gérard</a>
    </p>
    <?php $nombre = 51?>
    <h2>Boucle for</h2>
    <p>Michel a tiré <?= $nombre ?> fois le cochonnet.</p>
    <?php for($i=1;$i<=$nombre;$i++){
       echo "<p>Et il tire $i fois.</p>";
    }
    ?>
</body>

</html>