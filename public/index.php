<?php
/**
 * EasyMVC Framework
 * 
 * Easymvc is an opensource project. You can implement it. It's only for educational 
 * purpose. Thank you
 * 
 * @category  EasyMVC
 * @author    Sakib Hasan <shakibdhaka.me@outlook.com>
 * @license   GNU General Public License v3.0 https://www.easymvc.com/license
 * @copyright 2020 The Author
 */

/**
 * Require autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Import classes
 */
use EasyMVC\Core\Application;

$app = new Application();
$app->router->run();
