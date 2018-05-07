<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>star</title>
</head>

<body>
    <?php $celebrite = $_GET['celebrite']; 
if($celebrite === "Michel"){
echo "<h1>A propos de Michel</h1>
<p>Il a 64 ans et a remporté 6 championats</p>";
}
else {
echo "<h1>A propos de Gérard</h1>
<p>Il a 67 ans et a remporté 4 championats</p>";
}
?>
</body>

</html>