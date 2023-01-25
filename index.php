<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf8_decode"/>
    <title>Piekarnia</title>
</head>

<body>
    <div style=" color: brown">
        <h1>Zamówienie online niuni na jedzenie:</h1>
    </div>
    <div style="border:orange; border-width:2px; border-style:solid; padding:12px">  
        <form action="order.php" method="post">
            <label> <b>Ile tofijków</b> <i>(6.99 PLN/opk)</i>:<input type="text" name="paczkow" style="margin-left:22px"/> </label>

            </br> </br>

            <label> <b>Ile sałaty (1kg)</b> <i>(5.29 PLN/opk)</i>:<input type="text" name="grzebieni"/> </label>
            <div style="padding-top: 10px">
                <input type="submit" value="Złóż zamówienie" style="background-color:red; color: white;" >
            </div>
        </form>
    </div>
</body>
</html>