<?php

/**
 *  Funzione che dati come argomento una lunghezza e un insieme di caratteri (string)
 *  resituisce una stringa con caratteri casuali in un range impostabile
 *  
 */


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