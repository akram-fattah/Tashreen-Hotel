<?php
require "../app/models/Rooms.php";
class Home extends Controller {
    public function index() {
        $model = new Rooms();
        $res =  $model->rooms();
        $photos = $model->getAllPhotos();
        $customersVoice = $model->customersVoice();

        $this->view('home', [
            'res' => $res,
            'photos' => $photos,
            'customersVoice' => $customersVoice
        ]);
    }
}

