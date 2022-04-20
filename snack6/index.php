<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Snack-6</title>
</head>
<body>
    <?php
    $dbValues = array_values($db);
    $dbKeys = array_keys($db);
    for ( $i = 0; $i < count ($dbKeys) ; $i++){;?>
    <h4>Ruolo: <?php echo $dbKeys[$i]; ?></h4>
    <?php for ($dbIndex = 0; $dbIndex < count($dbValues[$i]); $dbIndex++) { ?>
<h5>
<?php echo $dbValues[$i][$dbIndex]['name']; ?>
</h5>
<p>
<?php echo $dbValues[$i][$dbIndex]['lastname']; ?>
    </h5>
<?php } ?>
<?php } ?>

</body>
</html>