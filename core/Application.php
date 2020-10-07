<?php
/**
 * EasyMVC Core Namespace
 */
namespace EasyMVC\Core;

/**
 * Application Class
 */
class Application
{
    /**
     * Variables
     */
    public Router $router;

    /**
     * Construct method
     */
    public function __construct()
    {
        $this->router = new Router();
    }
}
