<?php session_start(); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pass-Gen</title>
</head>

<body>
    <div class="container">
        <header>
            <h1 class="mt-5">Strong Password Generator</h1>
            <h2 class="mt-2">Genera una Password Sicura</h2>
        </header>

        <div class="answer">
            <?php echo $_SESSION["pass"]?>
        </div>
        <div class="back">
            <a href="./index.php">Torna Indietro</a>
        </div>
    </div>
</body>