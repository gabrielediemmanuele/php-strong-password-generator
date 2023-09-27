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
    /* imposto il valore minimo a 1*/
    $i = 1;
    /*creo una condizione.. */
    /*se gen-password viene attivato... */
    if (isset($_GET['gen-password'])) {
        /*lunghezza della password è uguale al numero dato dall'utente*/
        $password_length = $_GET['gen-password'];
        /*creo un ciclo do e while*/
        do {
            /*creo una variabile per i caratteri che vengono generati*/
            /*con rand prendo tot caratteri da 0 alla lunghezza dei legi - 1 */
            $random_characters = $legit_characters[rand(0, strlen($legit_characters) - 1)];
            /*richiamo con echo il random_caracters altrimenti non esiste..*/
            echo $random_characters;
            /*incremento il valore di 1 fin quando non raggiunge il massimo */
            $i++;
            /*la condizione è che il ciclo funzioni fin quando non è minore o uguale al valore dato dall'utente*/
        } while ($i <= $password_length);
    }
    /*ritorno la password generata...*/
    return $gen_password;
}

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