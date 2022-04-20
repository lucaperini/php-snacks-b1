<?php

// PHP Snack 1:
// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.ospite.
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60

$matches = [
   [
      "squadraCasa" => "Cefalonia",
      "squadraOspite" => "Viterbo",
      "puntiCasa" => 100,
      "puntiOspite" => 28
   ],
   [
      "squadraCasa" => "Ascoli",
      "squadraOspite" => "Parma",
      "puntiCasa" => 100,
      "puntiOspite" => 15
   ],
   [
      "squadraCasa" => "Inter",
      "squadraOspite" => "Rivisondoli A.S.",
      "puntiCasa" => 88,
      "puntiOspite" => 70
   ],
   [
      "squadraCasa" => "Carpi",
      "squadraOspite" => "Monza",
      "puntiCasa" => 55,
      "puntiOspite" => 60
   ],
];


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP-Snack-.1</title>
        
    </head>
    <body>
        <ul>
        <?php
         for ($i = 0; $i < count($matches); $i++) { ?>
                <li>
                    <?php
                    echo $matches[$i]["squadraCasa"] . " - " . $matches[$i]["squadraOspite"] . " | " . $matches[$i]["puntiCasa"] . " - " . $matches[$i]["puntiOspite"];
                    ?>
                </li>
                <?php
            }
        ?>
        </ul>
    </body>
</html>

