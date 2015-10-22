<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


return [
    'view_manager' => [
        'template_map' => include CATEGORY_ADMIN_MODULE_ROOT . '/template_map.php',
        'template_path_stack' => [
            CATEGORY_ADMIN_MODULE_ROOT . '/view',
        ],
    ],
    'controllers' => [
        'factories' => [
            'CategoryAdmin\\Index' => 'CategoryAdmin\\Controller\\IndexControllerFactory',
            'CategoryAdmin\\Show' => 'CategoryAdmin\\Controller\\ShowControllerFactory',
            'CategoryAdmin\\Create' => 'CategoryAdmin\\Controller\\CreateControllerFactory',
            'CategoryAdmin\\Update' => 'CategoryAdmin\\Controller\\UpdateControllerFactory',
            'CategoryAdmin\\Delete' => 'CategoryAdmin\\Controller\\DeleteControllerFactory',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'CategoryAdmin\\Delete\\Form' => 'CategoryAdmin\\Form\\CategoryDeleteForm',
        ],
        'factories' => [
            'CategoryAdmin\\Data\\Form' => 'CategoryAdmin\\Form\\CategoryDataFormFactory',
        ],
    ],
    'router' => [
        'routes' => [
            'category-admin' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/category-admin',
                    'defaults' => [
                        '__NAMESPACE__' => 'CategoryAdmin',
                        'controller' => 'Index',
                        'action' => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'show' => [
                        'type' => 'segment',
                        'options' => [
                            'route' => '/show[/:id]',
                            'defaults' => [
                                'controller' => 'Show',
                            ],
                            'constraints' => [
                                'id' => '[a-z0-9-]*',
                            ],
                        ],
                    ],
                    'create' => [
                        'type' => 'segment',
                        'options' => [
                            'route' => '/create',
                            'defaults' => [
                                'controller' => 'Create',
                            ],
                            'constraints' => [
                                
                            ],
                        ],
                    ],
                    'update' => [
                        'type' => 'segment',
                        'options' => [
                            'route' => '/update[/:id]',
                            'defaults' => [
                                'controller' => 'Update',
                            ],
                            'constraints' => [
                                'id' => '[a-z0-9-]*',
                            ],
                        ],
                    ],
                    'delete' => [
                        'type' => 'segment',
                        'options' => [
                            'route' => '/delete[/:id]',
                            'defaults' => [
                                'controller' => 'Delete',
                            ],
                            'constraints' => [
                                'id' => '[a-z0-9-]*',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'phpArray',
                'base_dir' => CATEGORY_ADMIN_MODULE_ROOT . '/language',
                'pattern' => '%s.php',
            ],
        ],
    ],
    'navigation' => [
        'default' => [
            'category-admin' => [
                'type' => 'mvc',
                'order' => '200',
                'label' => 'category_admin_navigation_index',
                'route' => 'category-admin',
                '__NAMESPACE__' => 'CategoryAdmin',
                'controller' => 'Index',
                'action' => 'index',
                'pages' => [
                    'show' => [
                        'type' => 'mvc',
                        'route' => 'category-admin/show',
                        'visible' => false,
                    ],
                    'create' => [
                        'type' => 'mvc',
                        'route' => 'category-admin/create',
                        'visible' => false,
                    ],
                    'update' => [
                        'type' => 'mvc',
                        'route' => 'category-admin/update',
                        'visible' => false,
                    ],
                    'delete' => [
                        'type' => 'mvc',
                        'route' => 'category-admin/delete',
                        'visible' => false,
                    ],
                ],
            ],
        ],
    ],
];