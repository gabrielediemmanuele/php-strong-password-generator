# PHP Strong Password Generator

nome repo: php-strong-password-generator

## Descrizione

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

## Milestone 1

Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

## Milestone 2

Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

## Milestone 3 (BONUS)

Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.

## STEPS

- creo un form
  - creo un input di testo e un bottone
- creo una funzione che, attingendo da una stringa, genera una password da restituire all'utente (potrei stamparla inizialmente a schermo..).

  - creo la stringa.
  - creo la funzione, che in base al numero inserito, genera la pw in un range.

- sposto la logica in un file functions.php che includeremo (include), nella pagina principale.
