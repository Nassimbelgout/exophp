<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle for</title>
</head>
<body>
    <pre>
    <b>Boucle for </b>
    <br>
    <br>
    <?php
    for($i=0; $i <= 30; $i++){
        echo $i . " ";
        if ($i == 10 || $i == 30){
            echo "valeur trouvé";
        }
    }
    ?>
    <br>
    <br>
    
    <?php

$montableau = ["Remi","Nassim","Mohammed","Florent"];

// print_r ($montableau[1]);
// echo $montableau[0];
foreach($montableau as $valeur){
    echo $valeur . "\n";
}

foreach($montableau as $indice => $valeur){
    echo "Indice " . $indice . " contient " . $valeur . "\n";
}




?>
TABLEAU MULTIDIMENSIONs

<?php

$tableaumulti = [
    ["a","b","c"],
    ["d","e","f"],
    ["g","h","i"],
];

foreach ($tableaumulti as $cle1 => $valeur1){
    foreach($valeur1 as $cle2 => $valeur2){
        echo "[" . $cle1 . "," . $cle2 . "] = " . $valeur2 . "<br />";
    }
}


?>






    </pre>
</body>
</html>