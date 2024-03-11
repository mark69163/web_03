<?php

    if(isset($_POST['btSend'])){
        $year=$_POST['birthYear'];
        $month=$_POST['birthMonth'];
        $day=$_POST['birthDay'];

        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['messgae'];

        echo "<h3>Name: $name</h3>>";

    }

?>
