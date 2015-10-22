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
 * Application configuration
 *
 * @package    Application
 */
return [
    'modules'                 => [
        'AssetManager',
        'Application',
        'ZF2rapidLib',
        'ZendDeveloperTools',
        'BjyProfiler',
        'SanSessionToolbar',
    ],
    'module_listener_options' => [
        'config_glob_paths'        => [
            'config/autoload/{,*.}{global,development,local}.php',
        ],
        'module_paths'             => [
            './module',
            './vendor',
        ],
        'cache_dir'                => APPLICATION_ROOT . '/data/cache',
        'config_cache_enabled'     => false,
        'config_cache_key'         => 'module_config_cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key'     => 'module_map_cache',
    ],
];
