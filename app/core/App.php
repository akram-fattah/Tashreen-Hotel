<?php 

class App{
    public function run(Request $request) {
        $router = new Router();
        [$controllerName, $method] = $router->resolve($request);
        $controllerName = ucfirst($controllerName);
        require "../app/controllers/$controllerName.php";
        $controller = new $controllerName();
        $controller->$method();
    }
}