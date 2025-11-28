<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
    $grades = array("John" => "A+", "Jane" => "A", "Joe" => "B"); // associative array (hashmap sort of thing) array(key => value)
    // echo $grades["John"]; // Access by passing the keys and the keys must be unique
    // echo count( $grades ); // length
    echo $grades[$_POST["name"]];
    ?>
</body>
</html>