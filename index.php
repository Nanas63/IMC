<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><IMC></title>

    <link rel="stylesheet" href="/asset/style.css">

</head>
<body>

<h1><?php echo "CALCULEZ VOTRE IMC" ?></h1><br>
<form method="post" action="" class="formulaire">
    <label for="age">Votre age</label>
    <input id="age" type="number" name="age"><br><br>

    <label for="poids">Votre poids(kg)</label>
    <input id="poids" type="number" name="poids"><br><br>

    <label for="taille">Votre taille(cm)</label>
    <input id="taille" type="number" name="taille"><br><br><br>

    <input type="submit" class="bouton" value="Valider"><br><br>

    <?php

    if (isset($_POST["age"]) && isset($_POST["poids"]) && isset($_POST["taille"])) {
        $age = $_POST["age"];

        $poids = $_POST["poids"];

        $taille = $_POST["taille"];

        $imc = ($poids / ($taille*$taille))*10000;

        echo "<p class='imc'>Votre IMC"." "."="." "($imc,1)."</p>";


    $typeIMC = "";
    if ($imc < 18.5) {
        $typeIMC = "Vous êtes en insuffisance pondérale";
    } else if ($imc >= 18.5 && $imc <= 25) {
        $typeIMC = "Votre IMC est normal";

    } else if ($imc > 25 && $imc <= 30) {
        $typeIMC = "Vous êtes en surpoids";
    } else if ($imc > 30 && $imc <= 35) {
        $typeIMC = "Vous êtes en obésité modérée";

    } else if ($imc > 35 && $imc <= 40) {
        $typeIMC = "Vous êtes en obésité sévère";

    } else {
        $typeIMC = "Vous êtes en obésité morbide";
    }

    ?>
    <p class=imcstyle><?php echo $typeIMC?></p>
    <?php
    }
    ?>
</form>
</body>

</html>