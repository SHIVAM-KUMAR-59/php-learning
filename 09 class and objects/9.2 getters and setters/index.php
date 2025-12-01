<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        class Movie {
            public string $title;
            private string $rating;

            public function __construct(string $title, string $rating) {
                $this->title = $title;
                $this->rating = $rating;
            }

            public function getRating(): string {
                return $this->rating;
            }

            public function setRating(string $rating): void {
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NC-17") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("avengers", "PG-13");
        echo "Name: $avengers->title <br>";
        echo "Rating: {$avengers->getRating()} <br>";
        $avengers->setRating("R");
        echo "Rating: {$avengers->getRating()} <br>";
    ?>
</body>
</html>