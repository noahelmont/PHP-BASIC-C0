<?php
function mijnNaamIsGroot(){
    $voornaam = "Noah";
    $achternaam = "Elmont";
    $helemaal = "Mijn naam is" . $voornaam . $achternaam;
    strtoupper($voornaam . $achternaam);
    echo $helemaal;
}

mijnNaamIsGroot();

?>