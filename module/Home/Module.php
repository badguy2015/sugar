<?php
/**
 * Created by PhpStorm.
 * User: yellowcow
 * Date: 15/11/18
 * Time: 下午9:32
 */


namespace Home;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
//                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

//    public function getServiceConfig()
//    {
//        return array(
//            'factories' => array(
//                'Demo\Model\AlbumTable' =>  function($sm) {
//                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
//                    $table = new AlbumTable($dbAdapter);
//                    return $table;
//                },
//            ),
//        );
//    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}