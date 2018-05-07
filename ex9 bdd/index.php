<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ex9;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die("Offline");
}
?>
<p>Tout marche</p>
</body>
</html>