<!-- PHP -->
<?php
$gen_password = '';
/* Primo step, ricevere il numero. */
if (isset($_GET["gen-password"])) {
    $gen_password = genPassword();
}

/*Funzione per generare la Password */
function genPassword()
{
    /*creo una variabile > stringa con tutti i caratteri ammessi */
    $legit_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!()-.?[]_~!:;@$%^&*+=';
    /*creo una variabile che racchiuda i caratteri generati */
    $gen_password = '';
    $i = 1;

    if (isset($_GET['gen-password'])) {
        $password_length = $_GET['gen-password'];
        do {
            $random_characters = $legit_characters[rand(0, strlen($legit_characters) - 1)];
            echo $random_characters;
            $i++;
        } while ($i <= $password_length);
    }
    return $gen_password;
}

/* Creo una funzione che in base al numero mi genera una password...*/
?>

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
        <form method="GET" action="index.php">
            <div>Scegli da 6 a 15 per generare la tua password! </div>
            <div class="input-group mt-3">
                <input type="text" name="gen-password" id="gen-password" class="form-control"
                    placeholder="Number of characters.." aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn bg-danger text-light" type="submit" id="button-addon2">Generate</button>
                <button class="btn bg-warning text-dark" type="reset">Reset</button>
            </div>
        </form>
        <div class="container">
            <?php echo $gen_password ?>
        </div>
    </div>
    <!-- Password Generata (potrei mettere un alert) -->
</body>

</html>