<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$randomNumbers = [];
while (count($randomNumbers) < 15) {
    $randomNumber = rand(0, 100);
    if (!in_array($randomNumber, $randomNumbers)) {
        $randomNumbers[] = $randomNumber;
    }
}
// var_dump($randomNumbers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="numbers.ico" rel="icon" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <title>Random numbers</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">
            Your random numbers:
        </h1>
        <div class="text-center">
            <?php echo implode(', ', $randomNumbers); ?>


        </div>

</body>

</html>