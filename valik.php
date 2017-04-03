<?php
$tekst="Oleks võinud midagi kirjutada ka";
if (isset($_POST['tekst']) && $_POST['tekst']!="") {
    $tekst=htmlspecialchars($_POST['tekst']);
}
$taustavarv="#fff";
if (isset($_POST['taustavarv']) && $_POST['taustavarv']!="") {
    $taustavarv=htmlspecialchars($_POST['taustavarv']);
}
$tekstivarv="#000000";
if (isset($_POST['tekstivarv']) && $_POST['tekstivarv']!="") {
    $tekstivarv=htmlspecialchars($_POST['tekstivarv']);
}
$piirjoonepaksus="0";
if (isset($_POST['piirjoonepaksus']) && $_POST['piirjoonepaksus']!="") {
    $piirjoonepaksus=htmlspecialchars($_POST['piirjoonepaksus']);
}
$piirjoonestiil="solid";
if (isset($_POST['piirjoonestiil']) && $_POST['piirjoonestiil']!="") {
    $piirjoonestiil=htmlspecialchars($_POST['piirjoonestiil']);
}
$piirjoonevarv="#000000";
if (isset($_POST['piirjoonevarv']) && $_POST['piirjoonevarv']!="") {
    $piirjoonevarv=htmlspecialchars($_POST['piirjoonevarv']);
}
$piirjoonenurk="0";
if (isset($_POST['piirjoonenurk']) && $_POST['piirjoonenurk']!="") {
    $piirjoonenurk=htmlspecialchars($_POST['piirjoonenurk']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valik</title>
    <style type="text/css">
        .output {
            padding:5px;
            margin:3px;
            width: 300px;
            height: 200px;
            background-color: <?php echo $taustavarv; ?>;
            border-width: <?php echo $piirjoonepaksus; ?>px;
            border-style: <?php echo $piirjoonestiil; ?>;
            border-color: <?php echo $piirjoonevarv; ?>;
            border-radius: <?php echo $piirjoonenurk; ?>px;

        }
        #piirjoon {
            padding:5px;
            margin:3px;
            width: 300px;
            height: 100px;
            border: solid black 1px;
        }
        #mudru {
            color: <?php echo $tekstivarv; ?>;
        }
    </style>
</head>
<body>
    <div class="output">
        <p id="mudru"><?php echo $tekst; ?></p>
    </div>
    <form method="post">
        Sisesta tekst</br>
        <input type="text" name="tekst"></br>
        Vali taustavärvus</br>
        <input type="color" name="taustavarv"></br>
        Vali teksti värvus</br>
        <input type="color" name="tekstivarv"></br>
        Piirjoon</br>
        <div id="piirjoon">
            <input type="number" name="piirjoonepaksus" min="1" max="5">Vali piirjoone paksus(1-5px)</br>
            <select name="piirjoonestiil">
                <option value="solid">Solid</option>
                <option value="dotted">Dotted</option>
                <option value="dashed">Dashed</option>
                <option value="double">Double</option>
            </select>Piirjoone stiil</br>
            <input type="color" name="piirjoonevarv">Piirjoone värvus</br>
            <input type="number" name="piirjoonenurk" min="0" max="20">Piirjoone nurga raadius(0-20px)</br>
        </div>
        <input type="submit" value="Postita">
    </form>
</body>
</html>
