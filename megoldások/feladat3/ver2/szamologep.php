<?php
    // alkalmazás logika: űrlap ellenőrzés
    if(isset($_GET['operandus1'])
       && isset($_GET['muvelet'])
       && isset($_GET['operandus2']))
    {
        $hiba = '';
        
        $op1 = (integer)$_GET['operandus1'];
        if ((string)$op1 != $_GET['operandus1'])
            $hiba .= "Az első operandus csak szám lehet.<br>";
    
        $op2 = (integer)$_GET['operandus2'];
        if ((string)$op2 != $_GET['operandus2'])
            $hiba .= "A második operandus csak szám lehet.<br>";
    
        if($hiba == '') {
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
    // megjelenítés logika:
?>    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Számológép v2</title>
</head>
<body>
    <p>        
        <?php
            if (isset($hiba) and strlen($hiba) > 0)
                echo $hiba;
            elseif (isset($eredmeny))
                echo "$op1 " . $_GET['muvelet'] . " $op2 = $eredmeny";        
        ?>
    </p>
    
    <form action="szamologep.php">
        <input type="text" name="operandus1" pattern="[1-9][0-9]*|0" required>
        <select name="muvelet">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>        
        <input type="text" name="operandus2" pattern="[1-9][0-9]*|0" required>
        <input type="submit" name="szamol" value="="> ?
    </form>
</body>
</html>
