<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Szorzotabla</title>
    <link rel="stylesheet" type="text/css" href="css/szorzo.css">
</head>
<body>
    <table border="1px">
        <tbody>
            <tr>
                <?php
                    for ($cella=1;$cella<=10;$cella++){
                        echo "<td>";
                        for($sor=1;$sor<=10;$sor++){
                            echo "$cella * $sor = ";
                            echo $cella*$sor;
                            echo '<br>';
                        }

                    }


                ?>
            </tr>
        </tbody>>
    </table>>
</body>
</html>
