<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$studenti = [
    [
        'nome' => 'Giovanni',
        'cognome' => 'Rossi',
        'voti' => [5, 7, 8, 9, 10]
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Bianchi',
        'voti' => [6, 7, 8, 9, 10]
    ],
    [
        'nome' => 'Mario',
        'cognome' => 'Verdi',
        'voti' => [5, 7, 4, 9, 10]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Gialli',
        'voti' => [5, 7, 8, 6, 10]
    ],
    [
        'nome' => 'Matteo',
        'cognome' => 'Rosi',
        'voti' => [5, 7, 8, 9, 5]
    ]
];

//stampare la media dei voti di ogni studente e salvarla in una variabile
$media = [];
foreach ($studenti as $studente) {
    $media[] = array_sum($studente['voti']) / count($studente['voti']);
}
var_dump($media);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="kaddressbook.ico" rel="icon" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <title>Lista Studenti</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">
            Lista Studenti
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Media Voti</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($studenti as $studente) : ?>
                    <tr>
                        <td><?= $studente['nome'] ?></td>
                        <td><?= $studente['cognome'] ?></td>
                        <td><?= $media[array_search($studente, $studenti)] ?></td>

                    </tr>

                <?php endforeach; ?>

            </tbody>
    </div>

</body>

</html>