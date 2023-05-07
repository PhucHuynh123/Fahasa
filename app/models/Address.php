<?php

require_once('./core/model.php');

class Address extends Model
{
    public static function update($id, $name, $phone_number, $address, $city, $district, $ward, $default)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        if ($default == 1) {
            $sql = "UPDATE addresses SET is_default = 0 WHERE user_id = " . $_SESSION['id'] . " AND is_default = 1";
            mysqli_query($conn, $sql);
        }

        $sql = "UPDATE addresses SET name = '$name', phone_number = '$phone_number', address = '$address', 
        city = '$city', district = '$district', ward = '$ward', is_default = $default WHERE id = $id";

        mysqli_query($conn, $sql);
    }

    public static function store($name, $phone_number, $address, $city, $district, $ward, $default)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        if ($default == 1) {
            $sql = "UPDATE addresses SET is_default = 0 WHERE user_id = " . $_SESSION['id'] . " AND is_default = 1";
            mysqli_query($conn, $sql);
        }

        $sql = "INSERT INTO addresses (name, phone_number, address, city, district, ward, is_default, user_id)
                VALUES('$name', '$phone_number', '$address', '$city', '$district', '$ward', $default, " . $_SESSION['id'] . ")";
        echo $sql;
        mysqli_query($conn, $sql);
    }
}
