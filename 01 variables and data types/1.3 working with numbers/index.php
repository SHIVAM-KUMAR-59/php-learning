<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    echo 40; // Integer
    echo "<br/>";
    echo 3.14; // Float
    echo "<br/>";
    echo 10.34 / 2.5;
    echo "<br/>";
    // echo 10.34 % 2.5; --> error
    $num = 10;
    echo "<br/>";
    echo decbin($num); // Decimal to Binary
    echo "<br/>";
    echo $num++; // post Increment
    echo "<br/>";
    echo ++$num; // pre Increment
    echo "<br/>";
    echo $num--; // post Decrement
    echo "<br/>";
    echo --$num; // pre Decrement
    echo "<br/>";
    echo abs(-1000); // Absolute value
    echo "<br/>";
    echo round(3.14); // Round
    echo "<br/>";
    echo ceil(3.14); // Ceil
    echo "<br/>";
    echo floor(3.14); // Floor
    echo "<br/>";
    echo max(3, 4); // Maximum
    echo "<br/>";
    echo min(3, 4); // Minimum
    echo "<br/>";
    echo pow(2, 3); // Power
    echo "<br/>";
    echo sqrt(9); // Square root

    ?>
</body>
</html>