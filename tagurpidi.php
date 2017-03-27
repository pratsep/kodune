<!DOCTYPE html>

<html>
<head>
    <title>Tagurpidi</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $tekst = "See tekst esitatakse tagurpidi!";
        $massiiv = str_split($tekst);
        for($i = count($massiiv)-1; $i > -1; $i--){
            echo $massiiv[$i];
        }
    ?>
</body>
</html>
