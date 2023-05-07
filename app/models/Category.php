<?php

require_once('./core/model.php');

class Category extends Model
{
    public static function create($category)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "INSERT INTO categories (name) VALUES ('$category')";
        mysqli_query($conn, $sql);
    }
}
