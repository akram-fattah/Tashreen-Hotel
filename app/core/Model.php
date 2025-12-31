<?php 

class Model extends Database{

    public function selectALl() {
        $q = "SELECT * FROM rooms";

        return $this->query($q);
    }
}