<!DOCTYPE html>

<html>
<head>
    <title>Tagurpidi</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $tekst = "See tekst esitatakse tagurpidi!";
        echo $tekst;
        echo "</br>";
        function tagurpidi($sisestus){
            $massiiv = str_split($sisestus);
            for($i = count($massiiv)-1; $i > -1; $i--){
                echo $massiiv[$i];
            }
        }
        tagurpidi($tekst);
    ?>
</body>
</html>
