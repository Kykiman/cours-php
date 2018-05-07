<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
   
   session_start();
   if(empty($_SESSION['mot_de_passe'])){
   $_SESSION['mot_de_passe'] = $_POST["mot_de_passe"];
}

    if($_SESSION['mot_de_passe'] === "k"){
        ?>
        <a href="secret_bis.php">page 2</a><p>The secret</p>
        <?php 
    }
    else{
      
        echo "Wrong password";
    }
    ?>
</body>
</html>