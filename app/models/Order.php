<?php

require_once('./core/model.php');

class Order extends Model
{
    public static function store($name, $phone_number, $address, $city, $district, $ward, $total, $user_id, $cart)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "INSERT INTO orders (name, phone_number, address, city, district, ward, total, user_id)
        VALUES ('$name', '$phone_number', '$address', '$city', '$district', '$ward', $total, $user_id)";

        mysqli_query($conn, $sql);
        $order_id = mysqli_insert_id($conn);

        foreach ($cart as $book_id => $book) {
            if ($book['checked'] == "true") {
                $quantity = $book['quantity'];
                $sql = "INSERT INTO order_details (order_id, book_id, quantity)
                VALUES ($order_id, $book_id, $quantity)";
                mysqli_query($conn, $sql);

                unset($_SESSION['cart'][$book_id]);
            }
        }
    }

    public static function getByUserID($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT * from orders WHERE user_id = $id ORDER BY id DESC";
        return mysqli_query($conn, $sql);
    }

    public static function destroy($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "DELETE from order_details WHERE order_id = $id";
        mysqli_query($conn, $sql);
        $sql = "DELETE from orders WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    public static function cancel($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "UPDATE orders SET status = 2 WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    public static function confirm($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "UPDATE orders SET status = 1 WHERE id = $id";
        mysqli_query($conn, $sql);
    }
}
