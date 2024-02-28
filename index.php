<?php




$ascii_lowercase = 'abcdefghijklmnopqrstuvwxyz';
$ascii_uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$digits = '0123456789';
$punctuation = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
$characters = $ascii_lowercase . $ascii_uppercase . $digits . $punctuation;

$form_sent = !empty($_GET);
$pwd_generated = "";


;
if ($form_sent) {
    $pdw_length = (int) $_GET["pdw_length"];
    while (strlen($pwd_generated) < $pdw_length) {
        $random_index = rand(0, 94);
        for ($i = 0; $i <= strlen($characters); $i++) {
            if ($i == $random_index) {
                echo $characters[$i] . "--- ";
                $pwd_generated .= $characters[$i];
            }
            ;
        }
    }
    var_dump($pwd_generated);
    var_dump(strlen($pwd_generated));
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
        <?= $pwd_generated ?>
    </div>
</body>

</html>