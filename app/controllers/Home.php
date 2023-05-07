<?php

require_once('./app/models/Book.php');
require_once('./app/models/Category.php');
require_once('./app/models/Rating.php');
require_once('./app/models/Publisher.php');
require_once('./app/models/Supplier.php');
class Home
{
    public function product($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $book = Book::getByID($id);
        $publisher = Publisher::getByID($book['publisher_id']);
        $supplier = Supplier::getByID($book['supplier_id']);
        $ratings = Rating::getAllByBookID($id);

        $reviews = [0, 0, 0, 0, 0];
        $progress = [0, 0, 0, 0, 0];
        foreach ($ratings as $rating) {
            if ($rating['is_approved'] == 1) {
                $reviews[$rating['rating'] - 1]++;
            }
        }
        $total_reviews = array_sum($reviews);

        $rating_value = 0;
        if ($total_reviews > 0) {
            for ($i = 1; $i <= 5; $i++) {
                $progress[$i - 1] = $reviews[$i - 1] / $total_reviews;
                $rating_value += $i * $progress[$i - 1];
                $progress[$i - 1] *= 100;
            }
        }

        require("./app/views/user/home/product.php");
    }

    public function rating()
    {
        if (isset($_SESSION['id'])) {
            Rating::post($_POST['book_id'], $_SESSION['id'], $_POST['rating'], $_POST['comment']);
        } else {
        }
    }

    public function category()
    {
        $categories = Category::getAll();
        $books_sql = Book::getAll();

        $books = array();
        while ($book = $books_sql->fetch_assoc()) {
            $books[] = $book;
        }

        require("./app/views/user/home/category.php");
    }

    public function resultToArray($result)
    {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function index()
    {
        $books_sql = Book::getAll();
        $books = array();
        while ($book = $books_sql->fetch_assoc()) {
            $books[] = $book;
        }
        $categories = Category::getAll();
        require("./app/views/user/home/index.php");
    }
}
