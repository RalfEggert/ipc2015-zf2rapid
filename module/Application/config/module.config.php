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
 * Application module configuration
 *
 * @package    Application
 */
return [
    'router'          => [
        'routes' => [
            'home' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        '__NAMESPACE__' => 'Application',
                        'controller' => 'index',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers'     => [
        'invokables' => [
            'Application\\Index' => 'Application\Controller\IndexController',
        ],
    ],

    'service_manager' => [
        'factories' => [
            'Session\Config' => 'Zend\Session\Service\SessionConfigFactory',
            'navigation'     => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ],
        'aliases'   => [
            'translator' => 'MvcTranslator',
        ],
    ],

    'view_helpers'    => [
        'aliases' => [
            'h1'                      => 'zf2rapidLibH1',
            'date'                    => 'zf2rapidLibDate',
            'bootstrapFlashMessenger' => 'zf2rapidLibBootstrapFlashMessenger',
            'bootstrapForm'           => 'zf2rapidLibBootstrapForm',
            'bootstrapMenu'           => 'zf2rapidLibBootstrapMenu',
        ],
    ],

    'view_manager'    => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             => include APPLICATION_MODULE_ROOT . '/template_map.php',
        'template_path_stack'      => [
            APPLICATION_MODULE_ROOT . '/view',
        ],
    ],

    'translator'      => [
        'locale'                    => 'en_US',
        'translation_file_patterns' => [
            [
                'type'     => 'phpArray',
                'base_dir' => APPLICATION_MODULE_ROOT . '/language',
                'pattern'  => '%s.php',
            ],
        ],
    ],

    'session_config'  => [
        'save_path' => APPLICATION_ROOT . '/data/session',
        'name'      => 'ZF2RAPID_SESSION',
    ],

    'navigation'      => [
        'default' => [
            'application' => [
                'type'       => 'mvc',
                'order'      => '100',
                'label'      => 'application_navigation_home',
                'route'      => 'home',
                'controller' => 'index',
                'action'     => 'index',
            ],
        ],
    ],
];
