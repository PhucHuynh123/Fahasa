<?php
require_once('core/router.php');

$conn = mysqli_connect("localhost", "root", "", "Fahasa");
mysqli_set_charset($conn, 'utf8');
session_start();


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$router = new Router();

// Home
$router->add("", ['controller' => 'Home', 'action' => 'index']);
$router->add('product/{id:\d+}', ['controller' => 'Home', 'action' => 'product']);
$router->add('category', ['controller' => 'Home', 'action' => 'category']);

// Cart
$router->add('checkout/cart', ['controller' => 'CartController', 'action' => 'index']);
$router->add('cart/addtocart', ['controller' => 'CartController', 'action' => 'addToCart']);
$router->add('cart/check', ['controller' => 'CartController', 'action' => 'toggleCheckBook']);
$router->add('cart/checkall', ['controller' => 'CartController', 'action' => 'checkAll']);
$router->add('cart/add', ['controller' => 'CartController', 'action' => 'addQuantity']);
$router->add('cart/subtract', ['controller' => 'CartController', 'action' => 'subtractQuantity']);
$router->add('cart/delete', ['controller' => 'CartController', 'action' => 'deleteItem']);

// Checkout
$router->add('onestepcheckout', ['controller' => 'CartController', 'action' => 'checkout']);
$router->add('checkout/confirm', ['controller' => 'CartController', 'action' => 'confirm']);
// Login

$router->add('login', ['controller' => 'Login', 'action' => 'index']);
$router->add('login/login_process', ['controller' => 'Login', 'action' => 'login']);
$router->add('login/register_process', ['controller' => 'Login', 'action' => 'register']);
$router->add('login/logout_process', ['controller' => 'Login', 'action' => 'logout']);
$router->add('verify', ['controller' => 'Login', 'action' => 'verify']);

// Customer
$router->add('customer/account', ['controller' => 'Customer', 'action' => 'account']);
$router->add('customer/account/edit', ['controller' => 'Customer', 'action' => 'accountEdit']);
$router->add('customer/account/editPost', ['controller' => 'Customer', 'action' => 'accountEditPost']);
$router->add('customer/account/updatePassword', ['controller' => 'Customer', 'action' => 'accountUpdatePaswword']);
$router->add('customer/order', ['controller' => 'Customer', 'action' => 'order']);
$router->add('customer/order/cancel/{id:\d+}', ['controller' => 'OrderController', 'action' => 'cancel']);
$router->add('customer/order/view/{id:\d+}', ['controller' => 'Customer', 'action' => 'orderDetail']);
$router->add('customer/rating', ['controller' => 'Customer', 'action' => 'rating']);

$router->add('customer/address', ['controller' => 'Customer', 'action' => 'address']);
$router->add('customer/address/new', ['controller' => 'Customer', 'action' => 'addressNew']);
$router->add('customer/address/newPost', ['controller' => 'Customer', 'action' => 'addressNewPost']);
$router->add('customer/address/edit/{id:\d+}', ['controller' => 'Customer', 'action' => 'addressEdit']);
$router->add('customer/address/editPost/{id:\d+}', ['controller' => 'Customer', 'action' => 'addressEditPost']);
$router->add('customer/address/delete/{id:\d+}', ['controller' => 'Customer', 'action' => 'addressDelete']);

// Rating
$router->add('product/rating', ['controller' => 'Home', 'action' => 'rating']);

// Admin
$router->add('dashboard', ['controller' => 'Admin', 'action' => 'index']);
// Books
$router->add('dashboard/books', ['controller' => 'Admin', 'action' => 'books']);
$router->add('dashboard/books/store', ['controller' => 'BookController', 'action' => 'store']);
$router->add('dashboard/books/update/{id:\d+}', ['controller' => 'BookController', 'action' => 'update']);
$router->add('dashboard/books/destroy/{id:\d+}', ['controller' => 'BookController', 'action' => 'destroy']);
$router->add('dashboard/books/addCategory', ['controller' => 'BookController', 'action' => 'addCategory']);
$router->add('dashboard/books/addSupplier', ['controller' => 'BookController', 'action' => 'addSupplier']);
$router->add('dashboard/books/addPublisher', ['controller' => 'BookController', 'action' => 'addPublisher']);
// Users
$router->add('dashboard/users', ['controller' => 'Admin', 'action' => 'users']);
$router->add('dashboard/users/destroy/{id:\d+}', ['controller' => 'UserController', 'action' => 'destroy']);

// Ratings
$router->add('dashboard/ratings', ['controller' => 'Admin', 'action' => 'ratings']);
$router->add('dashboard/ratings/destroy/{id:\d+}', ['controller' => 'RatingController', 'action' => 'destroy']);
$router->add('dashboard/ratings/approve/{id:\d+}', ['controller' => 'RatingController', 'action' => 'approve']);

// Orders
$router->add('dashboard/orders', ['controller' => 'Admin', 'action' => 'orders']);
$router->add('dashboard/orders/view/{id:\d+}', ['controller' => 'Admin', 'action' => 'order_details']);
$router->add('dashboard/orders/destroy/{id:\d+}', ['controller' => 'OrderController', 'action' => 'destroy']);
$router->add('dashboard/orders/confirm/{id:\d+}', ['controller' => 'OrderController', 'action' => 'confirm']);

$router->dispatch($_SERVER['QUERY_STRING']);
