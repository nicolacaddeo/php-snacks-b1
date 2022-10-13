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

    for ($i = 0; $i < 3; $i++) {
        echo '<div class="basketMatches">'.$matches[$i]['homeTeam'] .'-'. $matches[$i]['visitingTeam'] .'|'. $matches[$i]['homeTeamPoints'].'-'.$matches[$i]['visitingTeamPoints'].'</div>';
    }
    
    # ---------------------------------------

    # Snack 2
    
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
    <div class="container">
        
    </div>
</body>
</html>