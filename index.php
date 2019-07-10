<?php

$nombres = ['toni','jorge', 'julia', 'jose', 'mateo', 'jaume', 'petro', 'alejandro', 'fran', 'adrian', 'lolo', 'cristian','jordi', 'david', 'luis', 'alex'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
</head>
<body>
    <?php
        while (!empty($nombres)) {
            $primerRand = rand(1, count($nombres)) - 1;
            $primerNombre = $nombres[$primerRand];
            unset($nombres[$primerRand]);
            $nombres = array_values($nombres);

            $segundoRand = rand(1, count($nombres)) - 1;
            $segundoNombre = $nombres[$segundoRand];
            unset($nombres[$segundoRand]);
            $nombres = array_values($nombres);

            echo($primerNombre . ' ------ ' . $segundoNombre . '<br>');
        }
    ?>
</body>
</html>