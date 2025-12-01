<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        for($i = 1; $i <= 10; $i++) {
            echo "$i <br>";
        }

        $arr = array(1, 2, 3, 4, 5);
        for($i = 0; $i < count($arr); $i++) {
            echo "$arr[$i] <br>";
        }
    ?>
</body>
</html>