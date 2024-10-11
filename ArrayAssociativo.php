<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
</head>
<body>

    <?php
    $casa["indirizzo"] =  "Via dei rossi";
    $casa["metri_quadri"] = 100.5;
    $casa["prezzo_metro_quadrato"] = 2500;
    $casa["prezzo_totale"] = ($casa["metri_quadri"] * $casa["prezzo_metro_quadrato"]);

    ?>

    <table style="border: 1px solid black; border-collapse: collapse; text-align:center">

   
    <tr>
        <td style="border: 1px solid black">Indirizzo</td>
        <td style="border: 1px solid black">Metri Quadri</td>
        <td style="border: 1px solid black">Prezzo al metro quadro</td>
        <td style="border: 1px solid black">Prezzo Totale</td>
    </tr>
    
    <tr>

    <?php
     
      foreach ($casa as $chiave => $val){
        echo "<td style='border: 1px solid black'>" . $casa[$chiave] . "</td>";
      }

  
    ?>
    </tr>

    </table>
    
</body>
</html>