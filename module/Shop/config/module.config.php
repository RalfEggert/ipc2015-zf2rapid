<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


return [
    'view_manager' => [
        'template_map' => include SHOP_MODULE_ROOT . '/template_map.php',
        'template_path_stack' => [
            SHOP_MODULE_ROOT . '/view',
        ],
    ],
    'controllers' => [
        'factories' => [
            'Shop\\Basket' => 'Shop\\Controller\\BasketControllerFactory',
        ],
    ],
    'form_elements' => [
        'factories' => [
            'shopBasket' => 'Shop\\Form\\BasketFactory',
        ],
    ],
    'validators' => [
        'factories' => [
            'shopBasket' => 'Shop\\Model\\Validator\\BasketFactory',
        ],
    ],
    'hydrators' => [
        'factories' => [
            'shopBasket' => 'Shop\\Model\\Hydrator\\BasketFactory',
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'shopShowBasket' => 'Shop\\View\\Helper\\ShowBasketFactory',
        ],
    ],
];