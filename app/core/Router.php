<?php

class Router {
    protected array $routes = [
        'home' => ['home', 'index'],
        'about' => ['about', 'index'],
    ];
    public function resolve(Request $request) {
        $url = $request->splitUrl();
        return $this->routes[$url] ?? ['_404', 'index'];
    }
}