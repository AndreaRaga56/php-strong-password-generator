<?php
session_start();
require_once __DIR__ . "/functions.php";

$givenLength = 0;
$password = "";

if (isset($_GET['length'])) {

    $string = "";

    if (isset($_GET['uppercase']) && $_GET['uppercase'] == 1) {
        $string .=  "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if (isset($_GET['lowercase']) && $_GET['lowercase'] == 1) {
        $string .= "abcdefghijklmnopqrstuvwxyz";
    }
    if (isset($_GET['symbols']) && $_GET['symbols'] == 1) {
        $string .= "#[{(|.&*@%^_=+<>-";
    }
    if (isset($_GET['numbers']) && $_GET['numbers'] == 1) {
        $string .= "0123456789";
    }

    if ($_GET['length'] > 0 && $string != "" && isset($_GET['repetition']) && ($_GET['length'] <= strlen($string))||($_GET['repetition']="1")) {
        $givenLength = (int)$_GET['length'];
        $password = "La tua password di $givenLength caratteri è " . createNewPass($givenLength, $string, $_GET['repetition']);
    } else {
        $password = "X";
    }
    $_SESSION["pass"] = $password;
};

if ($password != "" && $password != "X") {
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

        <?php if ($password == "X"){ ?>
            <div class="answer">I parametri inseriti non sono validi</div>
        <?php }?>
    
        <form method="$_GET">
            <div class="mb-3">
                <label for="length" class="form-label">Lunghezza Password</label>
                <input name="length" id="length" type="number" class="form-control" min="0" placeholder="Inserisci la lunghezza">
            </div>

            <br>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="uppercase" id="uppercase" value="1">
                <label class="form-check-label" for="uppercase">Includi Lettere Maiuscole</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="lowercase" id="lowercase" value="1">
                <label class="form-check-label" for="lowercase">Includi Lettere Minuscole</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="numbers" id="numbers" value="1">
                <label class="form-check-label" for="numbers">Includi Numeri</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="symbols" id="symbols" value="1">
                <label class="form-check-label" for="symbols">Includi Simboli</label>
            </div>

            <br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="repetition" id="repetitionYes" value="1" checked>
                <label class="form-check-label" for="repetitionYes">Permetti Ripetizioni di Caratteri</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="repetition" id="repetitionNo" value="0">
                <label class="form-check-label" for="repetitionNo">Non Permettere Ripetizioni di Caratteri</label>
            </div>

            <br>

            <button class="btn btn-secondary mt-2">Invia</button>
        </form>
    </div>

</body>

</html>