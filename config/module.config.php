<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGUI
 */

/**
 * @return array
 */
return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'DragonJsonServerGUI\Controller\GUI',
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'invokables' => [
            'DragonJsonServerGUI\Controller\GUI' => 'DragonJsonServerGUI\Controller\GUIController'
        ],
    ],
    'view_manager' => [
        'doctype' => 'HTML5',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
