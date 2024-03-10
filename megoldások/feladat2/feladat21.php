﻿<?php

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
}

?>                          
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>LNKO</title>
</head>
<body>
    <?php if(isset($a)) echo "<h2>Eredmény:</h2><strong>".$szam1."</strong> és <strong>".$szam2."</strong> legnagyobb közös osztója: <strong>".$a."</strong><br>"; ?>
    <h1>LEGNAGYOBB KÖZÖS OSZTÓ</h1>
    <h2>Kérem a két számot:</h2>
    <form method="POST">
        1. szám: <input type="text" name="szam1" pattern="[1-9][0-9]{3}[0-9]*" required> (&ge; 1000)<br><br>
        2. szám: <input type="text" name="szam2" pattern="[1-9][0-9]{3}[0-9]*" required> (&ge; 1000)<br><br>
        <input type="submit" value="LNKO">
    </form>
</body>
</html>