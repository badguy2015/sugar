<?php
return array(
    'controllers' => array(
        'invokables' => array(
            //为什么要这句？否则路由失败？
            'Home\Controller\Index' => 'Home\Controller\IndexController',
        ),
    ),
    //album.local/demo[/:controller[/:action]] => /Album/module/Demo/Controller/IndexController.php
    //sugar.local/home[/:controller[/:action]] => sugar.local/Home/Controller/IndexController.php
    'router' => array(
        'routes' => array(
            'home' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/home[/:controller[/:action]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Home\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);