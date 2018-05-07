<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Un titre</title>
</head>




<body>

	<?php include("tableau-data.php");?>



	<h1> Les tableaux par Kylian Manzini</h1>
	<h2>1. Utiliser un tableau numéroté pour afficher plusieurs noms</h2>
	<?php 
		echo implode("<br>", $tableau) ;
?>
	<h2>2. Parcourir automatiquement un tableau avec une boucle for</h2>

	<?php for($i=0; $i < count($tableau); $i++){
	echo "A la position $i, nous avons $tableau[$i] ! </br>";
}; ?>


	<h2>3. Un eleve de la classe avec un tableau numeroté contenant des tableaux assiociatif</h2>

	<?php 
	echo "<div>";
		
	print_r($tableauXXL);
	
	echo "</div>";
	?>

<?php 
foreach($tableauXXL as $cle => "prenom")
{
	echo '[' . $cle . '] vaut ' . $element . '<br />';
}

?>







</body>

</html>
