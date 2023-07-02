<?php
$name = htmlentities($_POST["firstname"]);
$phoneNn = htmlentities($_POST["lol"]);
$email = htmlentities($_POST["mail"]);
$output = "
    имя: $name
    <br>
    номер: $phoneNn
    <br>
    почта: $email
";
echo $output;
?>
