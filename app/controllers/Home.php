<?php
require "../app/models/Rooms.php";
class Home extends Controller {
    public function index() {
        $model = new Rooms();
        $res =  $model->selectALl();
        $this->view('home', [
            'res' => $res,
        ]);
    }
}

