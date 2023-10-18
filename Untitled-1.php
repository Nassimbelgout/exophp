<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Untitled-1.css">
    <title>CV Nassim</title>
</head>
<body>
    <div class="Titre">
        <img class="Photocv" src="https://www.widoobiz.com/wp-content/uploads/2020/03/dan-guez-1072x568.jpg" alt="photo cv">
        <div class="Titrecv">
        <h1> CV de Nassim</h1>
        </div>
    </div>
<div class="tt">
    <div class="Titreform">
        <h2> FORMATION</h2>
</div>
        <?php

        $formations = [
            ["Etude de medecine "],
            ["Etude commerce"],
            ["Etude web dev"],
        ];

        foreach($formations as $i1 => $exp1){
            foreach($exp1 as $i2 => $exp2){
                echo   $exp2 . "<br />";
            }
            }
        



        ?>
    </div>

    <div class="Titreexp">
        <h2>EXPERIENCES</h2>
        </div>

        <div class="toto">
        <?php

        $experiences = [
            ["medecin "],
            ["commercial"],
            [" web dev"],
        ];

        foreach($experiences as $i1 => $tra1){
            foreach($tra1 as $i2 => $tra2){
                echo  $tra2 . "<br />";
            }
            }
        



        ?>
    </div>
        </div>

    
</body>
</html>