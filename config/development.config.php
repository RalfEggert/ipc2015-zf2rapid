<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


return [
    'modules' => [
        'AssetManager',
        'Application',
        'ZF2rapidLib',
        'ZendDeveloperTools',
        'BjyProfiler',
        'SanSessionToolbar',
        'Shop',
        'BlogDomain',
    ],
    'module_listener_options' => [
        'config_glob_paths' => [
            'config/autoload/{,*.}{global,development,local}.php',
        ],
        'module_paths' => [
            './module',
            './vendor',
        ],
        'cache_dir' => APPLICATION_ROOT . '/data/cache',
        'config_cache_enabled' => false,
        'config_cache_key' => 'module_config_cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key' => 'module_map_cache',
    ],
];