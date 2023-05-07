<?php

require_once('./core/model.php');

class Publisher extends Model
{
    public static function create($publisher)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "INSERT INTO publishers (name) VALUES ('$publisher')";
        mysqli_query($conn, $sql);
    }
}
