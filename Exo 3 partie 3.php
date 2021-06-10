<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 : Les boucles</title>
</head>
<body>
    <h1>Exo 3 : Les boucles</h1>
    <h2>Exo 3</h2>
    <p>
    Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
    Tant que la première variable n'est pas inférieure ou égale à 10 :
        - multiplier la première variable avec la deuxième
        - afficher le résultat
        - décrémenter la première variable  
    </p>
    <p>
        <?php
        $i = 100; 
        $b = rand (1,100);
        while($i >= 10)
        {
          echo ($i*$b)."<br>";
          $i--;
        }
        ?>
    </p>
</body>
</html>