<?php 

class Model extends Database{

    public function selectALl($q) {
        return $this->query($q);
    }
}