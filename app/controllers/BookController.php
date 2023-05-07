<?php
require_once('./app/models/Book.php');
require_once('./app/models/Category.php');
require_once('./app/models/Publisher.php');
require_once('./app/models/Supplier.php');
class BookController
{
    public function store()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            Book::store(
                $_POST['title'],
                $_POST['author'],
                $_POST['category_id'],
                $_POST['supplier_id'],
                $_POST['publisher_id'],
                $_POST['publication_date'],
                $_POST['image'],
                $_POST['description'],
                $_POST['price'],
                $_POST['discount'],
                $_POST['quantity'],
                $_POST['page_quantity'],
                $_POST['book_code']
            );
            header("Location:/Fahasa/dashboard/books");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function update($id)
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            Book::update(
                $id,
                $_POST['title'],
                $_POST['author'],
                $_POST['category_id'],
                $_POST['supplier_id'],
                $_POST['publisher_id'],
                $_POST['publication_date'],
                $_POST['image'],
                $_POST['description'],
                $_POST['price'],
                $_POST['discount'],
                $_POST['quantity'],
                $_POST['page_quantity'],
                $_POST['book_code']
            );
            header("Location:/Fahasa/dashboard/books");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function destroy($id)
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            Book::destroy($id);
            header("Location:/Fahasa/dashboard/books");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addCategory()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0 && isset($_POST['category'])) {
            Category::create($_POST['category']);
            header("Location:/Fahasa/dashboard/books");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addSupplier()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0 && isset($_POST['supplier'])) {
            Supplier::create($_POST['supplier']);
            header("Location:/Fahasa/dashboard/books");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addPublisher()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0 && isset($_POST['publisher'])) {
            Publisher::create($_POST['publisher']);
            header("Location:/Fahasa/dashboard/books");
        } else {
            header("Location:/Fahasa/");
        }
    }
}
