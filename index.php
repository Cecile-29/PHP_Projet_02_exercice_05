<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet02 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet02 Exercice05</h1>
            <p class="col-12 text-info text-center">Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.</p>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
            <?php
                // $i = 200;
                
                // for($i>=0) {
                //     echo '<h6 class="m-2"> '. ($i);
                //     $i -= 12;
                // }
                for($i=200; $i>=0; $i -= 12) {
                    ?>
                    <h2 class="m-2">La valeur de la variable est décrémentée d'un pas de 12 => <span><?= $i ?></span></h2>
                    <?php
                }
            ?>
        </div>
    </div>   
</body>
</html>