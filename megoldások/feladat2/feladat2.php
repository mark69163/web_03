<?php

if(isset($_POST["szam1"]) && isset($_POST["szam2"]))
{
    $szam1 = $_POST["szam1"];
    $szam2 = $_POST["szam2"];
    
    $a = $szam1;
    $b = $szam2;
    
    while($a != $b)
    {
        if($a < $b)
            $b -= $a;
        else
            $a -= $b;
    }

    $kimenet = "<h2>Eredmény:</h2><strong>".$szam1."</strong> és <strong>".$szam2."</strong> legnagyobb közös osztója: <strong>".$a."</strong>";
}
else {
    $kimenet = "Helytelen hívás: Nincs feldolgozandó adat!";
}

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>LNKO</title>
</head>
<body>
    <?php echo $kimenet; ?>
    <br><br>
    <a href="feladat2.html">Újra!</a>
</body>
</html>
