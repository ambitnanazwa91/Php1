<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf8_decode"/>
    <title>Podsumowanie zamówienia</title>
</head>

<body>

<?php

    $paczkow=$_POST['paczkow'];
    $grzebieni=$_POST['grzebieni'];
    $suma= 0.99*$paczkow + 1.29*$grzebieni;

echo<<<END
<div style=" color: brown">
<h1>Rachunek który musi zapłącić Matek:</h1>
</div>
    <table border="1" cellpading="10" cellspacing="0">
    <tr>
        <td>Tofijki (6.99 PLN/opk)</td> <td>$paczkow</td>
    </tr>
    <tr>
        <td>Sałata (5.29 PLN/opk)</td> <td>$grzebieni</td>
    </tr>
    <tr>
        <td>SUMA:</td> <td>$suma PLN</td>
    </tr>
    </table>

END;

?>

</body>
</html>