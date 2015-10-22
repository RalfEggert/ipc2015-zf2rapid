<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


return [
    'view_manager' => [
        'template_map' => include ARTICLE_ADMIN_MODULE_ROOT . '/template_map.php',
        'template_path_stack' => [
            ARTICLE_ADMIN_MODULE_ROOT . '/view',
        ],
    ],
    'controllers' => [
        'factories' => [
            'ArticleAdmin\\Index' => 'ArticleAdmin\\Controller\\IndexControllerFactory',
            'ArticleAdmin\\Show' => 'ArticleAdmin\\Controller\\ShowControllerFactory',
            'ArticleAdmin\\Create' => 'ArticleAdmin\\Controller\\CreateControllerFactory',
            'ArticleAdmin\\Update' => 'ArticleAdmin\\Controller\\UpdateControllerFactory',
            'ArticleAdmin\\Delete' => 'ArticleAdmin\\Controller\\DeleteControllerFactory',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'ArticleAdmin\\Delete\\Form' => 'ArticleAdmin\\Form\\ArticleDeleteForm',
        ],
        'factories' => [
            'ArticleAdmin\\Data\\Form' => 'ArticleAdmin\\Form\\ArticleDataFormFactory',
        ],
    ],
    'router' => [
        'routes' => [
            'article-admin' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/article-admin',
                    'defaults' => [
                        '__NAMESPACE__' => 'ArticleAdmin',
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
                'base_dir' => ARTICLE_ADMIN_MODULE_ROOT . '/language',
                'pattern' => '%s.php',
            ],
        ],
    ],
    'navigation' => [
        'default' => [
            'article-admin' => [
                'type' => 'mvc',
                'order' => '200',
                'label' => 'article_admin_navigation_index',
                'route' => 'article-admin',
                '__NAMESPACE__' => 'ArticleAdmin',
                'controller' => 'Index',
                'action' => 'index',
                'pages' => [
                    'show' => [
                        'type' => 'mvc',
                        'route' => 'article-admin/show',
                        'visible' => false,
                    ],
                    'create' => [
                        'type' => 'mvc',
                        'route' => 'article-admin/create',
                        'visible' => false,
                    ],
                    'update' => [
                        'type' => 'mvc',
                        'route' => 'article-admin/update',
                        'visible' => false,
                    ],
                    'delete' => [
                        'type' => 'mvc',
                        'route' => 'article-admin/delete',
                        'visible' => false,
                    ],
                ],
            ],
        ],
    ],
];