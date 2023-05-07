<?php

require_once('./core/model.php');
require_once('./app/models/Rating.php');

class Book extends Model
{

    public static function store($title, $author, $category_id, $supplier_id, $publisher_id, $publication_date, $image, $description, $price, $discount, $quantity, $page_quantity, $book_code)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "INSERT INTO books 
        (title, author, category_id, supplier_id, publisher_id, publication_date, image, description, price, discount, quantity, page_quantity, book_code)
        VALUES('$title', '$author', $category_id, $supplier_id, $publisher_id, '$publication_date', '$image', '$description', $price, $discount, $quantity, $page_quantity, '$book_code')";

        mysqli_query($conn, $sql);
    }

    public static function update($id, $title, $author, $category_id, $supplier_id, $publisher_id, $publication_date, $image, $description, $price, $discount, $quantity, $page_quantity, $book_code)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "UPDATE books 
        SET title = '$title', 
        author = '$author', 
        category_id = $category_id, 
        supplier_id = $supplier_id, 
        publisher_id = $publisher_id, 
        publication_date = '$publication_date', 
        image = '$image', 
        description = '$description', price = $price, 
        discount = $discount, quantity = $quantity, page_quantity = $page_quantity, book_code = '$book_code'
        WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    public static function updateQuantity($quantity, $id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "UPDATE books SET quantity = $quantity WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    public function getSpecialPrice()
    {
        echo $this->discount;
    }

    public static function getRating($id)
    {
        $ratings = Rating::getAllByBookID($id);

        if ($ratings->num_rows == 0) {
            return 0;
        }

        $total_rating = 0;


        foreach ($ratings as $rating) {
            $total_rating += $rating['rating'];
        }

        return $total_rating / $ratings->num_rows;
    }

    public static function getAll()
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT * from books";

        if (isset($_GET["q"])) {
            $q = $_GET["q"];
            $sql = "SELECT * from books WHERE title LIKE '%$q%'";
            if (isset($_GET["c"])) {
                $c = $_GET["c"];
                $categories = Category::getAll();

                foreach ($categories as $category) {
                    if ($c == $category['name']) {
                        $sql = "SELECT * from books WHERE title LIKE '%$q%' AND category_id = " . $category['id'];
                    }
                }
            }
        } else {
            if (isset($_GET["c"])) {
                $c = $_GET["c"];
                $categories = Category::getAll();

                foreach ($categories as $category) {
                    if ($c == $category['name']) {
                        $sql = "SELECT * from books WHERE category_id = " . $category['id'];
                    }
                }
            }
        }
        return mysqli_query($conn, $sql);
    }
}
