<?php

require_once __DIR__ . "./partials/data.php";
require_once __DIR__ . "./partials/functions.php";

$form_sent = !empty($_GET);
if ($form_sent) {
    $pdw_length = (int) $_GET["pdw_length"];
    session_start();
    $pwd = generate_pwd($pdw_length, $characters);
    header("Location: ./partials/result.php");
    $_SESSION["pwd"] = $pwd;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <h1>Genera la tua Password</h1>
        <form method="GET" class="row">
            <label for="pdw_length" class="form-label">Inserisci la lunghezza della password che desideri</label>
            <div class="col-10">
                <input type="number" name="pdw_length" id="pdw_length" class="form-control" min="2" max="94">
            </div>
            <div class="col-2"><button class="btn btn-secondary">Genera PDW</button></div>
        </form>
        <?php if ($form_sent): ?>
            <div> La PWD genereta è:
                <?php echo $pwd ?? ""; ?>
                <p>ed è lungha
                    <?= strlen($pwd); ?> caratteri come richiesto.
                </p>
            </div>
        <?php endif ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>