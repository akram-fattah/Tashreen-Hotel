<?php

class Rooms extends Model{
    public function rooms() {
        $q = "SELECT * FROM rooms ORDER BY RAND()";
        return $this->selectALl($q);
    }

    public function getAllPhotos() {
        $q = "SELECT img FROM rooms ORDER BY RAND() LIMIT 22";
        return $this->selectALl($q);
    }
    public function customersVoice() {
        $q = "SELECT * FROM customers_vioce ORDER BY RAND()";
        return $this->selectALl($q);
    }
}