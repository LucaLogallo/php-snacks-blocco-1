<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    $calendario = [
      [
        "squadra1" => "milano",
        "squadra2" => "matera",
        "punteggio1" => 22,
        "punteggio2" => 33,
      ],
      [
        "squadra1" => "genova",
        "squadra2" => "gallipoli",
        "punteggio1" => 45,
        "punteggio2" => 76,
      ],
      [
        "squadra1" => "roma",
        "squadra2" => "bari",
        "punteggio1" => 87,
        "punteggio2" => 99,
      ],
      [
        "squadra1" => "maratea",
        "squadra2" => "potenza",
        "punteggio1" => 100,
        "punteggio2" => 0,
      ]
      
      ];
      
  ?>
  <ul>
      <?php 
        foreach($calendario as $incontro){
      ?> 
      <li><?php echo $incontro['squadra1'] ?> - <?php echo $incontro['squadra2'] ?> || <?php echo $incontro['punteggio1'] ?>-<?php echo $incontro['punteggio2'] ?></li>

      <?php } ?>
  </ul>
    

</body>
</html>