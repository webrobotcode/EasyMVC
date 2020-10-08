<?php
/**
 * EasyMVC Core Namespace
 */
namespace EasyMVC\Core;

/**
 * Application Class
 */
class Router
{
    /**
     * Variables
     */
    protected array $routes = [];

    /**
     * Get method
     */
    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    /**
     * Resolve Method
     */
    public function resolve()
    {
        $uri = \strpos($_SERVER['REQUEST_URI'], '?') ?? '/';
        echo $uri;
    }
}
