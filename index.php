<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="get">
       Enter first number: <input type="number" name="first"/>
       <br>
       Enter second number: <input type="number" name="second"/>
       <br>
       <input type="submit"/>
    </form>

    <br>

    Answer: <?php echo $_GET["first"] + $_GET["second"]; ?>
</body>
</html>