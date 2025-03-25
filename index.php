<?php
$givenLength = $_GET['length'] ?? 0;
if ($_GET['length'] <= 0) {
    $givenLength = 0;
}
require_once __DIR__ . "/functions.php";
?>

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
            <?php
            if ($givenLength != 0) {
                echo createNewPass($givenLength);
            } else {
                echo "Nessun parametro valido inserito";
            }
            ?>
        </div>

        <form method="$_GET">
            <label for="length">Lunghezza Password</label>
            <input name="length" id="length" type="number">
            <br>
            <button class="btn btn-secondary mt-2">Invia</button>
        </form>
    </div>

</body>

</html>