<?php
/*chiamo la sessione*/
session_start();
/*mi aggancio a gen_password*/
$_SESSION['gen_password'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Strong Password Generator</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gabriele Di Emmanuele" />
    <meta name="description" content="php-strong-password-generator" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-success">Ecco la tua password!</h2>
        <div class="container">
            <!--Richiamo gen_password -->
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['gen_password']; ?>
            </div>
        </div>
    </div>
</body>

</html>