<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Szorzótábla</title>
  </head>
  <body>
    <h2>Első változat</h2>
    <table border="1">
      <tbody>
        <tr>
        <?php
          for ($cella=1; $cella<11; $cella++) { 
            echo "<td>";
              for ($sor=1; $sor<11; $sor++) {                    
                echo "$cella * $sor = ";                    
                echo $cella*$sor;                    
                echo '<br>';
              } 
            echo "</td>";
          }
        ?>
        </tr>
      </tbody>
    </table>
    <h2>Második változat</h2>
      <table border="1">
        <tbody>
        <?php
          for ($sor=1; $sor<11; $sor++) {
            echo "<tr>";
              for ($cella=1; $cella<11; $cella++) {                
                echo "<td>$cella * $sor = " . $cella*$sor. "</td>";            
              } 
            echo "</tr>";
          }
        ?>
        </tbody>
      </table> 
  </body>
</html>
                        