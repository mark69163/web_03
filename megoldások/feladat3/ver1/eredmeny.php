<?php
    // alkalmazás logika: űrlap ellenőrzés
    if(isset($_GET['operandus1'])
       && isset($_GET['muvelet'])
       && isset($_GET['operandus2']))
    {
        $hiba = '';
        $op1 = (integer)$_GET['operandus1'];
        if ((string)$op1 != $_GET['operandus1'])
            $hiba .= "Az első operandus csak egész szám lehet.<br>";
    
        $op2 = (integer)$_GET['operandus2'];
        if ((string)$op2 != $_GET['operandus2'])
            $hiba .= "A második operandus csak egész szám lehet.<br>";
    
        if($hiba == '')
        {
            switch ($_GET['muvelet']) {
            case '+':
                $eredmeny = $op1+$op2;
                break;
            case '-':
                $eredmeny = $op1-$op2;
                break;
            case '*':
                $eredmeny = $op1*$op2;
                break;
            case '/':
                if ($op2 == 0)
                    $hiba .= 'Nullával nem lehet osztani.<br>';
                else
                    $eredmeny = $op1/$op2;
                break;
            default:
                $hiba .= 'Ismeretlen művelet!<br>';
            }
        }
    }
    else
        $hiba = "Nincs elvégzendő művelet!<br>"
    // megjelenítés logika:
?>    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Számológép v1</title>
</head>
<body>
    <p>        
        <?php
            if (isset($hiba) && strlen($hiba) > 0)
                echo $hiba;
            else
                echo "$op1 " . $_GET['muvelet'] . " $op2 = $eredmeny";        
        ?>
    </p>
    <p>
        <a href="szamologep.html">Újra próbálom</a>
    </p>    
</body>
</html>
