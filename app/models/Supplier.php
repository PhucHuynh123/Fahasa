<?php

require_once('./core/model.php');

class Supplier extends Model
{
    public static function create($supplier)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "INSERT INTO suppliers (name) VALUES ('$supplier')";
        mysqli_query($conn, $sql);
    }
}
