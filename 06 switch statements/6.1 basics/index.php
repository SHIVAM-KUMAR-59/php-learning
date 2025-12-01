<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        Grade: <input type="text" placeholder="Enter your grade" name="grade"/>
        <input type="submit"/>
    </form>

    <?php

        $grade = $_POST['grade'];
        switch ($grade) {
            case 'A': echo "You did great"; break;
            case "B": echo "You did okayish"; break;
            case "C": echo "Could've been better"; break;
            case "D": echo "You almost failed"; break;
            case "F": echo "You failed"; break;
            default: echo "Invalid grade";
        }
    ?>
</body>
</html>