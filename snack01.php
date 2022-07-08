<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php

$nbaCalendar = [
    [
        'home' => 'Golden State Warriors',
        'guest' => 'Boston Celtics',
        'homePoints' => 108,
        'guestPoints' => 120
    ],
    [
        'home' => 'Golden State Warriors',
        'guest' => 'Boston Celtics',
        'homePoints' => 107,
        'guestPoints' => 88
    ],
    [
        'home' => 'Boston Celtics',
        'guest' => 'Golden State Warriors',
        'homePoints' => 116,
        'guestPoints' => 100
    ],
    [
        'home' => 'Boston Celtics',
        'guest' => 'Golden State Warriors',
        'homePoints' => 97,
        'guestPoints' => 107
    ],
    [
        'home' => 'Golden State Warriors',
        'guest' => 'Boston Celtics',
        'homePoints' => 104,
        'guestPoints' => 94
    ],
    [
        'home' => 'Boston Celtics',
        'guest' => 'Golden State Warriors',
        'homePoints' => 90,
        'guestPoints' => 103
    ],
];





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <title>NBA Finals Golden State Warriors VS Boston Celtics</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">
            NBA Finals Golden State Warriors VS Boston Celtics
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Home</th>
                    <th>Guest</th>
                    <th></th>

                    <th>Home Points</th>
                    <th></th>

                    <th>Guest Points</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nbaCalendar as $game) : ?>
                    <tr>
                        <td><?= $game['home'] ?></td>
                        <td><?= $game['guest'] ?></td>
                        <td>|</td>
                        <td><?= $game['homePoints'] ?></td>
                        <td>-</td>
                        <td><?= $game['guestPoints'] ?></td>

                    </tr>

                <?php endforeach; ?>

            </tbody>
    </div>

</body>

</html>