<?php
$name = htmlentities($_POST["firstname"]);
$phoneNn = htmlentities($_POST["lol"]);
$email = htmlentities($_POST["mail"]);
$gender1 = htmlentities($_POST["gender12"]);
$rabota = htmlentities($_POST["rabotka12"]);
$output = "
    имя: $name
    <br>
    номер: $phoneNn
    <br>
    почта: $email
    <br>
    пол: $gender1
    <br>
    спеицальность: $rabota
";
echo $output;
?>
