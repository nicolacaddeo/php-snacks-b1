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