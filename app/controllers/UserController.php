<?php
require_once('./app/models/User.php');
require_once('./app/models/Rating.php');
require_once('./app/models/Address.php');
require_once('./app/models/Order.php');

class UserController
{
    public function destroy($id)
    {
        if ($_SESSION['level'] == 0) {
            $user = User::getByID($id);
            if ($user['level'] == 1) {
                Rating::deleteByUserID($id);

                $orders = Order::getByUserID($id);

                foreach ($orders as $order) {
                    Order::destroy($id);
                }

                Address::deleteByUserID($id);

                User::destroy($id);
            }
        }
    }
}
