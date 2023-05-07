<?php
require_once('./app/models/Order.php');
require_once('./app/models/Order_Detail.php');
require_once('./app/models/Book.php');
class OrderController
{
    public function destroy($id)
    {
        if (isset($_SESSION['id']) && $_SESSION['level'] == 0)
            Order::destroy($id);
    }

    public function confirm($id)
    {
        if (isset($_SESSION['id']) && $_SESSION['level'] == 0) {
            Order::confirm($id);
            $order_details = Order_Detail::getByOrderID($id);

            foreach ($order_details as $order_detail) {
                $book = Book::getByID($order_detail['book_id']);
                Book::updateQuantity($book['quantity'] - $order_detail['quantity'], $order_detail['book_id']);
            }
        }
    }

    public function cancel($id)
    {
        if (isset($_SESSION['id'])) {
            $order = Order::getByID($id);
            if ($_SESSION['id'] == $order['user_id']) {
                Order::cancel($id);
                header("Location:/Fahasa/customer/account");
            } else {
                header("Location:/Fahasa/");
            }
        } else {
            header("Location:/Fahasa/");
        }
    }
}
