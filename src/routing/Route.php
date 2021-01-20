<?php

class Route
{
    private $url;
    private $controller; // controller name
    private $action;     // method name from controller
    private $method;     // HTTP(S) method: GET/POST/PUT/UPDATE
    private $userRole;   // "" for unlogged, trainee, admin, trainer...

    public function __construct($url, $controller, $action, $method, $userRole = "")
    {
        $this->url        = $url;
        $this->controller = $controller;
        $this->action     = $action;
        $this->method     = $method;
        $this->userRole   = $userRole;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url): void
    {
        $this->url = $url;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController($controller): void
    {
        $this->controller = $controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action): void
    {
        $this->action = $action;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method): void
    {
        $this->method = $method;
    }

    public function getUserRole(): string
    {
        return $this->userRole;
    }

    public function setUserRole(string $userRole): void
    {
        $this->userRole = $userRole;
    }

}