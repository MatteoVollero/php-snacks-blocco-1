<?php
// PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60

function stampa($match){
  echo $match["squadraInCasa"]." - ".$match["squadraOspite"]." | ".$match["puntiCasa"]."-".$match["puntiOspite"]."<br>";
}


$matches = [
  "partita1" => [
    "squadraInCasa" => "Napoli",
    "puntiCasa" => 70,
    "squadraOspite" => "Olimpia Milano",
    "puntiOspite" => 50
  ],

  "partita2" => [
    "squadraInCasa" => "Olimpia Milano",
    "puntiCasa" => 30,
    "squadraOspite" => "Napoli",
    "puntiOspite" => 50
  ]
];

  stampa($matches["partita1"]);
  stampa($matches["partita2"]);

 ?>
