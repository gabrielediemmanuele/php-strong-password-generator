<!-- PHP -->
<?php ?>


<!-- HTML -->
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
    <!-- Per ogni hotel in hotels (hotels as hotel) stampa il suo name, description, parking, vote, distance_to_center. -->
    <div class="container mt-5 ">
        <!-- INPUT BONUS 1 -->
        <form method="GET">
            <div>Scegli da 6 a 15 per generare la tua password! </div>
            <div class="input-group mt-3">
                <input type="text" class="form-control" placeholder="Number of characters.."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn bg-danger text-light" type="button" id="button-addon2">Button</button>
            </div>
        </form>
    </div>
    <!-- Password Generata (potrei mettere un alert) -->
    <div></div>
</body>

</html>