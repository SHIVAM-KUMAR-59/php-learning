<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $index = 1;
        // While loop
        while($index < 10) {
            echo "$index <br>";
            $index++;
        }

        // Do while loop
        do {
            echo "$index <br>";
            $index++;
        }while($index < 10);
     ?>
</body>
</html>