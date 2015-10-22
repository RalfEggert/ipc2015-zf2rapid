<?php
/**
 * ZF2rapid skeleton application
 *
 * @package    Application
 * @link       https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright  Copyright (c) 2014 - 2015 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * Development configuration
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
        'dsn'     => 'mysql:dbname=ipc2015.zf2rapid;host=localhost;charset=utf8',
        'user'    => 'ipc2015',
        'pass'    => 'ipc2015',
    ],
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' => 'ZF2rapidLib\Db\Adapter\ProfilingAdapterFactory',
        ],
    ],
];
