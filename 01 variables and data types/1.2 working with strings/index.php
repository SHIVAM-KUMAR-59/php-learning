<!-- echo() -> Allwos us to print anything on the screen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $phrase = "Hello World";
    echo $phrase;
    echo "<br/>";
    echo strtolower($phrase); // lowercase
    echo "<br/>";
    echo strtoupper($phrase); // uppercase
    echo "<br/>";
    echo strlen($phrase); // length of string
    echo "<br/>";
    echo $phrase[0]; // character at index 0
    echo "<br/>";
    echo str_replace("Hello", "Hii", $phrase); // replace string
    echo "<br/>";
    echo substr($phrase,1, 5); // substring -> prints from starting index + length - 1
    ?>

</body>
</html>