<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kapcsolat</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="php/kapcsolat.php" method="post">
            <div>
            <label>
                <select name="szulnap">    
                    <?php for ($nap=1; $nap<=31; $nap++) { ?>
                      <option value="<?php echo $nap ?>"><?php echo $nap ?></option>
                    <?php } ?>
                </select>
                <select name="szulho">    
                    <?php for ($ho=1; $ho<=12; $ho++) { ?>
                      <option value="<?php echo $ho ?>"><?php echo $ho ?></option>
                    <?php } ?>
                </select>            
                <select name="szulev">
                    <?php for ($ev=1920; $ev<=2021; $ev++) { ?>
                      <option value="<?php echo $ev ?>"><?php echo $ev ?></option>
                    <?php } ?>            
                </select>
                Születési dátum: 
            </label>
            </div>
            <?php for ($suly=0; $suly<150; $suly+=30) { ?>            
              <div>
                <label>
                    <input name="suly" value="<?= $suly ?>" type="radio" <?= $suly==0 ? "required" : "" ?>>
                    <span><?php echo $suly . ' - ' . ($suly+30); ?></span>
                    <?= $suly==0 ? "Testsúly: " : "" ?>
                </label>
              </div>
            <?php } ?>
            <div>
            <label><input type="text" id="nev" name="nev" size="20" required minlength = "8" maxlength="20" pattern="[A-Za-z]+">Név (minimum 8, maximum 20 betű): </label>
            </div>
            <div>
            <label><input type="email" id="email" name="email" size="30" required maxlength="40">E-mail (kötelező, maximum 40 karakter): </label>
            </div>
            <div>
            <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10" required minlength="20"></textarea> Üzenet (minimum 20 karakter): </label>
            </div>
            <div>
            <input id="kuld" type="submit" value="Küld">
            </div>
    </form>

</body>
</html>
