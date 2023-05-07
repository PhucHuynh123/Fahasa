<?php

require_once('./core/model.php');

class Cart extends Model
{
    public static function count()
    {
        return count($_SESSION['cart']);
    }
}
