<?php

class Rooms extends Model{
    public function rooms() {
        return $this->selectALl();
    }
    public function getPhoto($id) {
        $q = "SELECT * FROM rooms_photo WHERE room_id = ?";
        return $this->query($q, [
            $id
        ]);
    }
}