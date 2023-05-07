<?php
require_once('./app/models/Rating.php');

class RatingController
{
    public function destroy($id)
    {
        if ($_SESSION['level'] == 0) {
            Rating::destroy($id);
        }
    }

    public function approve($id)
    {
        if ($_SESSION['level'] == 0) {
            Rating::approve($id);
        }
    }
}
