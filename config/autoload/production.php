<?php
/**
 * ZF2rapid skeleton application
 * 
 * @package    Application
 * @link      https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * Production configuration
 *
 * Use this file to overwrite all configuration from the global configuration
 * and from all the loaded modules. This config can be overwritten by local
 * configuration.
 *
 * @package    Application
 */
return [
    'db' => [
        'driver'  => 'pdo',
        'dsn'     => 'mysql:dbname=DATEBASE;host=localhost;charset=utf8',
        'user'    => 'USER',
        'pass'    => 'PASS',
    ],
];
