<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
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
    $dbValues = array_values($posts);
    $dbKeys = array_keys($posts);
    for ( $i = 0; $i < count ($dbKeys) ; $i++){;?>
    <h4>Articoli del <?php echo $dbKeys[$i]; ?></h4>
    <?php for ($dbIndex = 0; $dbIndex < count($dbValues[$i]); $dbIndex++) { ?>
<h5>
<?php echo $dbValues[$i][$dbIndex]['title']; ?>
</h5>
<p>
<?php echo $dbValues[$i][$dbIndex]['author']; ?>
</p>
<p>
<?php echo $dbValues[$i][$dbIndex]['text']; ?>
</p>
<?php } ?>
<?php } ?>

</body>
</html>