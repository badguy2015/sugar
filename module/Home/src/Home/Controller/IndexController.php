<?php
/**
 * Created by PhpStorm.
 * User: yellowcow
 * Date: 15/11/18
 * Time: 下午9:36
 */

namespace Home\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


Class IndexController extends AbstractActionController
{

    //首页
    public function indexAction(){
        $view = new ViewModel();
        return $view;
    }

    //阿拉伯糖页
    public function sugarAction()
    {
        return new ViewModel();
    }

    //文章中心页
    public function articleAction(){
        return new ViewModel();
    }

    //学堂
    public function sugarSchoolAction(){
        return new ViewModel();
    }

    //购买页
    public function buyAction(){
        return new ViewModel();
    }
}