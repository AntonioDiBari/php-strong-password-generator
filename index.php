<?php

function generate_pwd($pdw_length, $characters)
{
    $pwd_generated = "";
    while (strlen($pwd_generated) < $pdw_length) {
        $random_index = rand(0, 93);
        for ($i = 0; $i <= strlen($characters); $i++) {
            if ($i == $random_index) {
                echo '"' . $characters[$i] . '" ';
                $pwd_generated .= $characters[$i];
            }
            ;
        }
    }
    return $pwd_generated;
}
;

$ascii_lowercase = 'abcdefghijklmnopqrstuvwxyz';
$ascii_uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$digits = '0123456789';
$punctuation = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
$characters = $ascii_lowercase . $ascii_uppercase . $digits . $punctuation;
var_dump($characters);

$form_sent = !empty($_GET);


;
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
        <?= $pwd ?>
    </div>
</body>

</html>