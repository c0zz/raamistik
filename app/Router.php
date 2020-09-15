<?php
namespace App;

class Router{
    private $uri;
    private $method;

    /**
     * Router constructor.
     * @param $uri
     * @param $method
     */
    public function __construct($uri, $method)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->match();
        require(__DIR__ . '/../routes.php');
        $this->routes = $routes;
    }
    public function match(){
        $uris = array_keys($routes);
        if(in_array($this->uri, $uris)){
            call_user_func($this->routes[$this->uri]);
        } else {
            $title = "404 page not found";
            include(__DIR__ . '/../views/page.php');
        }
        if($_SERVER['REQUEST_URI'] == '/page1'){
            $title = "page 1";
            include(__DIR__ . '/../views/page.php');
        } elseif ($this->uri == '/page2'){
            $title = "page 2";
            include(__DIR__ . '/../views/page.php');
        } else {
            $title = "404 page not found";
            include(__DIR__ . '/../views/page.php');
        }

    }

}