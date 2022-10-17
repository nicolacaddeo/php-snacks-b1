<?php
    # Snack 1
    $matches = [
        [
            'homeTeam' => 'Golden State Warriors',
            'visitingTeam' => 'Lakers',
            'homeTeamPoints' => 90,
            'visitingTeamPoints' => 96
        ],
        [
            'homeTeam' => 'Boston Celtics',
            'visitingTeam' => 'Chicago Bulls',
            'homeTeamPoints' =>  80,
            'visitingTeamPoints' => 75
        ],
        [
            'homeTeam' => 'Miami Heat',
            'visitingTeam' => 'Houston Rockets',
            'homeTeamPoints' =>  102,
            'visitingTeamPoints' => 93
        ],
    ];
    echo '<h1>'.'Snack #1:'.'</h1>';
    for ($i = 0; $i < count($matches); $i++) {
        ?> 
            <div class="basketMatches">
                <?=$matches[$i]['homeTeam'] ?> - <?=$matches[$i]['visitingTeam']?> | <?= $matches[$i]['homeTeamPoints']?> - <?=$matches[$i]['visitingTeamPoints']?>
            </div>
        <?php
    }
    
?>
<hr>
<?php
# Snack 2
   
$name = $_GET["name"];
$age = $_GET["age"];
$mail = $_GET["mail"];
$accesOk = 'Accesso riuscito';
$accessDenied = 'Accesso negato';

echo '<h1>'.'Snack #2:'.'</h1>';

if ((filter_var($mail, FILTER_VALIDATE_EMAIL)) && (strlen($name) > 3) && (is_numeric($age) == true)){
    ?>
        <div class="info">
            Il nome inserito è: <span class="name"><?= $name ?></span> <br>
            La mail inserita è: <?= $mail ?> <br>
            L'età inserita è: <?= $age ?> <br>
        </div>
        <div class="access"><?=$accesOk?></div>
    <?php
} else {
    ?>
        <div class="info">
            Il nome inserito è: <span class="name"><?= $name ?></span> <br>
            La mail inserita è: <?= $mail ?> <br>
            L'età inserita è: <?= $age ?> <br>
        </div>
        <div class="access"><?=$accessDenied?></div>
    <?php
}
?>
<hr>
<?php
    #Snack 3
    echo '<h1>'.'Snack #3:'.'</h1>';
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
    
    foreach($posts as $key => $value) {
        ?>
            <div class="date"><?=$key.':' ?></div>
        <?php
        foreach($value as $post => $valueKey) {
            ?>
            <div class="post title"><?=$valueKey["title"] ?></div>
            <div class="post"><?=$valueKey["author"] ?></div>
            <div class="post"><?=$valueKey["text"] ?></div>
        <?php
        }
        
    }
?>
<hr>
<?php
    # Snack 4
    echo '<h1>'.'Snack #4:'.'</h1>';
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eveniet aliquid odit quasi corrupti minima voluptatum. Cumque reiciendis, eligendi, omnis illo necessitatibus provident, nihil sequi fuga aliquam in autem molestiae?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, consequuntur dicta aliquid alias culpa nemo dignissimos ipsa incidunt labore, accusantium dolorum! Laborum beatae reiciendis tempora adipisci asperiores aut consequuntur sapiente";

    ?>
        <div class="lorem-text">
            <?=$text ?>
        </div>
    <?php
    
    $phrases = explode(".", $text);
    echo '<ol>';
    // Stampo le singole frasi
    foreach($phrases as $phrase){
        echo '<li type="1">'.$phrase.'</li>';
    }
    echo '</ol>';
?>
<hr>
<?php
    # Snack 5
    echo '<h1>'.'Snack #5:'.'</h1>';
    $students = 
    [
        [
            'name' => 'Nicola',
            'lastName' => 'Caddeo',
            'votes' => [2, 5, 4, 6]
        ],
        [
            'name' => 'Emiliana',
            'lastName' => 'Mocci',
            'votes' => [7, 8, 6, 7, 10]
        ],
        [
            'name' => 'Mattia',
            'lastName' => 'Saba',
            'votes' => [4, 6, 7, 5]
        ]
    ];
   
    foreach($students as $student) {
        $voteAverage = array_sum($student["votes"]) / count($student["votes"]);
        ?>
            <div class="votes">
                <?= $student["name"] ?>  <?= $student["lastName"] ?> => (Media voti: <?= $voteAverage ?>)
            </div>
        <?php
    }      
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhP | Snacks</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/my_style.css">

    </head>
    <body>
        
    </body>
</html>
        