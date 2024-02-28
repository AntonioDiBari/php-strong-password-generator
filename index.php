<?php

require_once __DIR__ . "./partials/data.php";
require_once __DIR__ . "./partials/functions.php";

$form_sent = !empty($_GET);
if ($form_sent) {
    $pdw_length = (int) $_GET["pdw_length"];
    $pwd = generate_pwd($pdw_length, $characters);
    var_dump($pwd);
    var_dump(strlen($pwd));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <form method="GET">
        <label for="pdw_length">Inserisci la lunghezza della password che desideri</label>
        <input type="number" name="pdw_length" id="pdw_length" min="2" max="94">
        <button>Genera PDW</button>
    </form>
    <div> La PWD genereta è:
        <?php echo $pwd ?? "" ?>
    </div>
</body>

</html>