<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    function greet ($name) {
        echo "Hello $name <br>";
    }

    function cube ($num) {
        return $num * $num * $num; // return value back
    }

    greet("Shivam");
    echo cube(4);
    ?>
</body>
</html>