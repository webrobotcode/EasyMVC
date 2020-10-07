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
    protected $routes = [];

    /**
     * Get method
     */
    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback ?? '/';
    }
}
