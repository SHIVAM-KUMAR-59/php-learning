<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        class Book {
            // Class variables
            public string $title;
            public string $author;
            public int $pages;

            // Constructor
            // function __construct() {
            //     $this->title = "";
            //     $this->author = "";
            //     $this->pages = 0;
            // }
            // Constructor overloading is not allowed

            public function __construct($title, $author, $pages) {
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }

            public function getInfo(): void {
                echo "Name: $this->title <br>";
                echo "Author: $this->author <br>";
                echo "Number of pages: $this->pages <br>";
            }

            public function comparePages(Book $a, Book $b): int {
                if ($a->pages == $b->pages) {
                    return 0;
                } else if ($a->pages > $b->pages) {
                    return -1;
                } else {
                    return 1;
                }
            }
        }

        // Instantiating a class using the new keyword and constructor
        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        echo "$book1->title <br>";
        echo "$book1->author <br>";
        echo "$book1->pages <br>";
        echo $book1->getInfo();

        $book2 = new Book("Lord of the Rings", "Me",500);
        echo $book2->comparePages($book1, $book2);
    ?>
</body>
</html>