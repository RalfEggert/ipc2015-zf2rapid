<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


return [
    'view_manager' => [
        'template_map' => include BLOG_DOMAIN_MODULE_ROOT . '/template_map.php',
        'template_path_stack' => [
            BLOG_DOMAIN_MODULE_ROOT . '/view',
        ],
    ],
    'hydrators' => [
        'factories' => [
            'BlogDomain\\Article' => 'BlogDomain\\Model\\Hydrator\\ArticleHydratorFactory',
            'BlogDomain\\Author' => 'BlogDomain\\Model\\Hydrator\\AuthorHydratorFactory',
            'BlogDomain\\Category' => 'BlogDomain\\Model\\Hydrator\\CategoryHydratorFactory',
        ],
    ],
    'service_manager' => [
        'factories' => [
            'BlogDomain\\Model\\TableGateway\\Article' => 'BlogDomain\\Model\\TableGateway\\ArticleTableGatewayFactory',
            'BlogDomain\\Model\\Repository\\Article' => 'BlogDomain\\Model\\Repository\\ArticleRepositoryFactory',
            'BlogDomain\\Model\\TableGateway\\Author' => 'BlogDomain\\Model\\TableGateway\\AuthorTableGatewayFactory',
            'BlogDomain\\Model\\Repository\\Author' => 'BlogDomain\\Model\\Repository\\AuthorRepositoryFactory',
            'BlogDomain\\Model\\TableGateway\\Category' => 'BlogDomain\\Model\\TableGateway\\CategoryTableGatewayFactory',
            'BlogDomain\\Model\\Repository\\Category' => 'BlogDomain\\Model\\Repository\\CategoryRepositoryFactory',
        ],
    ],
    'input_filters' => [
        'factories' => [
            'BlogDomain\\Article' => 'BlogDomain\\Model\\InputFilter\\ArticleInputFilterFactory',
            'BlogDomain\\Author' => 'BlogDomain\\Model\\InputFilter\\AuthorInputFilterFactory',
            'BlogDomain\\Category' => 'BlogDomain\\Model\\InputFilter\\CategoryInputFilterFactory',
        ],
    ],
];