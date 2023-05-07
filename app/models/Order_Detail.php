<?php

require_once('./core/model.php');

class Order_Detail extends Model
{
    public static function getByOrderID($order_id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "SELECT * FROM order_details WHERE order_id = $order_id";
        return mysqli_query($conn, $sql);
    }
}
