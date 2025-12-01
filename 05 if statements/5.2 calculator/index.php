<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        First number: <input type="number" placeholder="Enter first number" name="first"/>
        Operation: <input type="text" placeholder="Enter operation" name="operation"/>
        Second number: <input type="number" placeholder="Enter second number" name="second"/>
        <input type="submit"/>
    </form>
    <?php

        $first = $_POST['first'];
        $operation = $_POST['operation'];
        $second = $_POST['second'];

        if ($operation == "+") {
            echo $first + $second;
        } elseif ($operation == "-") {
            echo $first - $second;
        } elseif ($operation == "*") {
            echo $first * $second;
        } elseif ($operation == "/") {
            echo $first / $second;
        } elseif ($operation == "%") {
            echo $first % $second;
        } elseif ($operation == "^") {
            echo $first ** $second;
        }else {
            echo "Invalid operation";
        }
     ?>
</body>
</html>