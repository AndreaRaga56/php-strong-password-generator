<?php
session_start();
require_once __DIR__ . "/functions.php";

$givenLength = 0;
$password = "";

if (isset($_GET['length'])) {
    if ($_GET['length'] >= 0) {
        $givenLength = (int)$_GET['length'];
        $password = "La tua password di $givenLength caratteri è " . createNewPass($givenLength);
    } else {
        $password = "Nessun parametro valido inserito";
    }
    $_SESSION["pass"] = $password;
};

if ($password != "") {
    header('Location: ./result.php');
}

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

        <form method="$_GET">
            <div class="mb-3">
                <label for="length" class="form-label">Lunghezza Password</label>
                <input name="length" id="length" type="number" class="form-control" min="0" placeholder="Inserisci la lunghezza">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="include_uppercase" id="include_uppercase" value="1">
                <label class="form-check-label" for="include_uppercase">Includi Lettere Maiuscole</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="include_lowercase" id="include_lowercase" value="1">
                <label class="form-check-label" for="include_lowercase">Includi Lettere Minuscole</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="include_numbers" id="include_numbers" value="1">
                <label class="form-check-label" for="include_numbers">Includi Numeri</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="include_symbols" id="include_symbols" value="1">
                <label class="form-check-label" for="include_symbols">Includi Simboli</label>
            </div>
            <button class="btn btn-secondary mt-2">Invia</button>
        </form>
    </div>

</body>

</html>