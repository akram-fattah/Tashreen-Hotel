<?php

class Request {
    public function splitUrl() {
        return $_GET['url'] ?? 'home';
    }
}