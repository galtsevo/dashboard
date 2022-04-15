<?php

return [
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'delivery' => [
        'controller' => 'delivery',
        'action' => 'index',
    ],

    'catalog/type/{id:\d+}' => [
        'controller' => 'catalog',
        'action' => 'type',
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'news/show' => [
        'controller' => 'news',
        'action' => 'show',
    ],

    'delivery/show' => [
        'controller' => 'delivery',
        'action' => 'show',
    ],

    'contacts' => [
        'controller' => 'main',
        'action' => 'contacts',
    ],

    'main/catalog' => [
        'controller' => 'main',
        'action' => 'catalog',
    ],
];