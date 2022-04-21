<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Snack-4</title>
</head>
<body>
<p>
    <?php 
        $randomArray = [];
        $i= 1;
        while ($i <= 15) {
            $rndNumber = rand(0, 100);
            if (!in_array($rndNumber, $randomArray)){
            array_push($randomArray, $rndNumber );
            $i++;
            }
        };
        var_dump($randomArray);
    ?>
</p>
</body>
</html>
