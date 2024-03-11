<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>4. Feladat</title>
</head>
<body>
    <div class="container">
        <h1>Contact details</h1>

        <form>

        <p>Birth date:

            <label>
                <select name="birthYear">
                    <?php
                        for($i=2024;$i>=1900;$i--){

                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <select name="birthMonth">
                    <?php
                        for($i=1;$i<=12;$i++){
                            if($i <10){
                                echo "<option>0$i</option>";
                            }
                            else {
                                echo "<option>$i</option>";
                            }

                        }
                    ?>
                </select>

                <select name="birthDay">
                    <?php
                        for($i=1;$i<=31;$i++) {
                            if($i <10){
                                echo "<option>0$i</option>";
                            }
                            else {
                                echo "<option>$i</option>";
                            }
                        }

                    ?>
                </select>
            </label>
            </p>

        <p>Weight:
            <div class="weights">
                <input type="radio" name="weight" id="wt" >
                <label for="wt" >1-30</label><br>

                <input type="radio" name="weight" id="wt">
                <label for="wt" >31-60</label><br>

                <input type="radio" name="weight" id="wt" checked>
                <label for="wt" >61-120</label><br>

                <input type="radio" name="weight" id="wt">
                <label for="wt" >121-150</label><br>
            </div>
            </p>

            <p>Name (min 8, max 20 characters):
                <label>
                    <input type="text" id="text" name="name" minlength="8" maxlength="20" pattern="^[\p{L}\s]{8,20}$" required>
                </label>
            </p>

            <p>Email (max 40 characters):
                <label>
                    <input type="email" id="text" name="email" maxlength="40" required>
                </label>
            </p>

            <p>Message (min 20 characters):
                <label>
                    <textarea minlength="20" name="message" id="msg" >

                    </textarea>
                </label>
            </p>
            <input type="submit" value="Send" id="send" name="btSend">
        </form>
    </div>

</body>
</html>
