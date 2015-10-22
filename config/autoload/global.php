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
 * Global configuration
 *
 * Use this file to setup all the basic configuration that can overwrite all
 * configuration from all the loaded modules. The global configuration can be
 * overwritten by development or production and the local configuration.
 *
 * @package    Application
 */
return [
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ],
    ],
];
