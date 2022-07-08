<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = key_exists("name", $_GET) ? $_GET["name"] : "";
$email = key_exists("email", $_GET) ? $_GET["email"] : "";
$age = key_exists("age", $_GET) ? $_GET["age"] : "";

//controlli
$validName = strlen($name) > 3;
$validEmail = strpos($email, "@") !== false && strpos($email, ".") !== false;
$validAge = is_numeric($age) !== false && $age > 0 && $age < 120;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="e_mail.ico" rel="icon" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">
            Please enter the required data to be able to access the service!
        </h1>
        <form action="">

            <form>

                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" class="form-control <?php echo !$validName ? 'is-invalid' : '' ?>" name="name" value="<?php echo $name ?>">
                    <div class="invalid-feedback">
                        Invalid name
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="text" class="form-control <?php echo !$validEmail ? 'is-invalid' : '' ?>" name="email" value="<?php echo $email ?>">
                    <div class="invalid-feedback">
                        Invalid email
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Age</label>
                    <input type="text" class="form-control <?php echo !$validAge ? 'is-invalid' : '' ?>" name="age" value="<?php echo $age ?>">
                    <div class="invalid-feedback">
                        Invalid age
                    </div>
                </div>

                <?php if (!$validName || !$validEmail || !$validAge) : ?>
                    <div class="alert alert-danger" role="alert">
                        Access denied
                    </div>
                <?php else : ?>
                    <div class="alert alert-success" role="alert">
                        Access granted
                    </div>
                <?php endif; ?>

                <button class="btn btn-primary" type="submit">Sent</button>

            </form>

    </div>

</body>

</html>