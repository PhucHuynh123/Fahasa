<?php
require_once('./app/models/Cart.php');
require_once('./app/models/Book.php');
require_once('./app/models/Address.php');
require_once('./app/models/Order.php');

class CartController
{
    public function index()
    {
        $cart = $_SESSION['cart'];

        if (!empty($cart)) {
            $total = 0;
            $allChecked = true;
            $paymentCheck = false;

            foreach ($cart as $id => $book) {
                if ($book['checked'] == "false") {
                    $allChecked = false;
                } else {
                    $paymentCheck = true;
                }
            }
        }

        require("./app/views/user/home/cart.php");
    }

    public function addToCart()
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        $checked = $_POST['checked'];


        if (empty($_SESSION['cart'][$id])) {
            $book = Book::getByID($id);
            $_SESSION['cart'][$id]['title'] = $book['title'];
            $_SESSION['cart'][$id]['image'] = $book['image'];
            $_SESSION['cart'][$id]['price'] = $book['price'];
            $_SESSION['cart'][$id]['discount'] = $book['discount'];
            $_SESSION['cart'][$id]['checked'] = $checked;
            $_SESSION['cart'][$id]['quantity'] = $quantity;
        } else {
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        }
    }

    public function addQuantity()
    {
        $id = $_POST['id'];
        $_SESSION['cart'][$id]['quantity']++;
    }

    public function subtractQuantity()
    {
        $id = $_POST['id'];
        $_SESSION['cart'][$id]['quantity']--;
        if ($_SESSION['cart'][$id]['quantity'] == 0) {
            unset($_SESSION['cart'][$id]);
        }
    }

    public function toggleCheckBook()
    {
        $id = $_POST['id'];
        if ($_SESSION['cart'][$id]['checked'] == "true") {
            $_SESSION['cart'][$id]['checked'] = "false";
        } else {
            $_SESSION['cart'][$id]['checked'] = "true";
        }
    }

    public function checkAll()
    {
        $check = $_POST['check'];

        foreach ($_SESSION['cart'] as $id => $book) {
            $_SESSION['cart'][$id]['checked'] = $check;
        }
    }

    public function deleteItem()
    {
        $id = $_POST['id'];
        unset($_SESSION['cart'][$id]);
    }

    public function checkout()
    {
        if (isset($_SESSION['id'])) {
            $addresses = Address::getByUserID($_SESSION['id']);
        }
        $cart = $_SESSION['cart'];
        $total = 0;
        require("./app/views/user/home/checkout.php");
    }

    public function confirm()
    {
        if (isset($_SESSION['id'])) {
            $address_id = $_POST['address_id'];
            $address = Address::getByID($address_id);

            Order::store(
                $address['name'],
                $address['phone_number'],
                $address['address'],
                $address['city'],
                $address['district'],
                $address['ward'],
                $_POST['total'],
                $_SESSION['id'],
                $_SESSION['cart']
            );
        } else {
            Order::store(
                $_POST['name'],
                $_POST['phone_number'],
                $_POST['address'],
                $_POST['city'],
                $_POST['district'],
                $_POST['ward'],
                $_POST['total'],
                0,
                $_SESSION['cart']
            );
        }
    }
}
