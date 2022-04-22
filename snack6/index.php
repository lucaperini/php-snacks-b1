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
    <link rel="stylesheet" href="./css/style.css">
    <title>Php-Snack-6</title>
</head>
<body>
<?php
    $keys = array_keys($db);
    $values = array_values($db);
    for ($index=0; $index < count($values); $index++) { 
        if ($keys[$index] == 'teachers') {
            echo '<div class="grey">';
            echo '<h5>Teachers</h5>';
            for ($teacherIndex=0; $teacherIndex < count($values[$index]); $teacherIndex++) { 
                $teacher = $values[$index][$teacherIndex];
                echo $teacher['name']. ' ' . $teacher['lastname'] . '<br>';
            }
            echo '</div>';
        }
        else if ($keys[$index] == 'pm') {
            echo '<div class="green">';
            echo '<h5>PM</h5>';
            for ($pmIndex=0; $pmIndex < count($values[$index]); $pmIndex++) { 
                $pm = $values[$index][$pmIndex];
                echo $pm['name']. ' ' . $pm['lastname'] . '<br>';
            }
        }
        echo '</div>';
    }
?>
</body>
</html>

