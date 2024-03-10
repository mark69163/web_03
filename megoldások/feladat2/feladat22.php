<?php

if(isset($_POST["szam1"]) && isset($_POST["szam2"]))
{
    $szam1 = $_POST["szam1"];
    $szam2 = $_POST["szam2"];
    
    $a = $szam1;
    $b = $szam2;
    
    while($a != $b)
        $a < $b ? $b -= $a : $a -= $b;
}

?>                          
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>LNKO</title>
</head>
<body>
    <h1>LEGNAGYOBB KÖZÖS OSZTÓ</h1>
    <h2>Kérem a két számot:</h2>
    <form method="POST">
        1. szám: <input type="number" name="szam1" value= "<?= isset($_POST['szam1']) ? $_POST['szam1'] : '' ?>" min="1000" required> (&ge; 1000)<br><br>
        2. szám: <input type="number" name="szam2" value= "<?= isset($_POST['szam2']) ? $_POST['szam2'] : '' ?>" min="1000" required> (&ge; 1000)<br><br>
        <input type="submit" value="LNKO"> = <input type="text" value="<?= isset($a) ? $a : '' ?>" readonly>
    </form>
</body>
</html>