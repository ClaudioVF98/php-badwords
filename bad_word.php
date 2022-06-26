<?php
$testo = 'Ciao mi chiamo Luca e vivo a Napoli. Nel tempo libero mi piace giocare a calcio e trovo molto interessante lo studio dei criceti. Luca Luca Luca.';


if (isset($_GET['censored'])){$censored_word = $_GET['censored'];};

$testo_replaced = str_replace($censored_word, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $testo ?></p>
    <p>Lunghezza Testo: <?= strlen($testo); ?></p>

    <form action="" method="get">
        <label for="censored"></label>
        <input type="text" name="censored" id="censored">
        <button>Invia</button>
    </form>

    <p>Testo sostituito: <br> <?= $testo_replaced ?></p>
</body>
</html>