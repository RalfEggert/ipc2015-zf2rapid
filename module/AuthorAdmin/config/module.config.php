<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


return [
    'view_manager' => [
        'template_map' => include AUTHOR_ADMIN_MODULE_ROOT . '/template_map.php',
        'template_path_stack' => [
            AUTHOR_ADMIN_MODULE_ROOT . '/view',
        ],
    ],
    'controllers' => [
        'factories' => [
            'AuthorAdmin\\Index' => 'AuthorAdmin\\Controller\\IndexControllerFactory',
            'AuthorAdmin\\Show' => 'AuthorAdmin\\Controller\\ShowControllerFactory',
            'AuthorAdmin\\Create' => 'AuthorAdmin\\Controller\\CreateControllerFactory',
            'AuthorAdmin\\Update' => 'AuthorAdmin\\Controller\\UpdateControllerFactory',
            'AuthorAdmin\\Delete' => 'AuthorAdmin\\Controller\\DeleteControllerFactory',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'AuthorAdmin\\Delete\\Form' => 'AuthorAdmin\\Form\\AuthorDeleteForm',
        ],
        'factories' => [
            'AuthorAdmin\\Data\\Form' => 'AuthorAdmin\\Form\\AuthorDataFormFactory',
        ],
    ],
    'router' => [
        'routes' => [
            'author-admin' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/author-admin',
                    'defaults' => [
                        '__NAMESPACE__' => 'AuthorAdmin',
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
                'base_dir' => AUTHOR_ADMIN_MODULE_ROOT . '/language',
                'pattern' => '%s.php',
            ],
        ],
    ],
    'navigation' => [
        'default' => [
            'author-admin' => [
                'type' => 'mvc',
                'order' => '200',
                'label' => 'author_admin_navigation_index',
                'route' => 'author-admin',
                '__NAMESPACE__' => 'AuthorAdmin',
                'controller' => 'Index',
                'action' => 'index',
                'pages' => [
                    'show' => [
                        'type' => 'mvc',
                        'route' => 'author-admin/show',
                        'visible' => false,
                    ],
                    'create' => [
                        'type' => 'mvc',
                        'route' => 'author-admin/create',
                        'visible' => false,
                    ],
                    'update' => [
                        'type' => 'mvc',
                        'route' => 'author-admin/update',
                        'visible' => false,
                    ],
                    'delete' => [
                        'type' => 'mvc',
                        'route' => 'author-admin/delete',
                        'visible' => false,
                    ],
                ],
            ],
        ],
    ],
];