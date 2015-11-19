<?php
/**
 * Created by PhpStorm.
 * User: yellowcow
 * Date: 15/11/18
 * Time: 下午10:31
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

Class IndexController extends AbstractActionController
{
    public function indexAction(){
        return new ViewModel();
    }

}