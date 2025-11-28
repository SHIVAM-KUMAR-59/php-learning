<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        $isMale = false;
        $isTall = true;
        if($isMale && $isTall) {
            echo "You are male and you are tall <br>";
        }else if($isTall && !$isMale) {
            echo "You are female and tall <br>";
        }else {
            echo "You are not male and not tall <br>";
        }

        function getMax($num1, $num2) {
            if($num1 > $num2) {
                return $num1;
            }else {
                return $num2;
            }
        }
        echo getMax(1,4);
    ?>
</body>
</html>