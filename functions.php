<?php
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
    if (isset($_GET['gen-password']) && $_GET['gen-password']) {
        /*lunghezza della password è uguale al numero dato dall'utente*/
        $password_length = $_GET['gen-password'];
        /*creo un ciclo do e while*/
        do {
            /*creo una variabile per i caratteri che vengono generati*/
            /*con rand prendo tot caratteri da 0 alla lunghezza dei legi - 1 */
            $random_characters = $legit_characters[rand(0, strlen($legit_characters) - 1)];
            /*gen_password adesso è uguale alle lettere generate */
            $gen_password .= $random_characters;
            /*incremento il valore di 1 fin quando non raggiunge il massimo */
            $i++;
            /*la condizione è che il ciclo funzioni fin quando non è minore o uguale al valore dato dall'utente*/
        } while ($i <= $password_length);
    }
    /*ritorno la password generata...*/
    return $gen_password;
}
?>
<!-- if ($password_length < 6 || $password_length > 15) {
            
        } -->