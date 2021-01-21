<?php

namespace app\controllers\admin;

class MainController extends AppController {

    public function indexAction(){
        $countNewOrders = \R::count('order', "status = '0'");
        $countUsers = \R::count('user');
        $countProducts = \R::count('product');
        $countCategory = \R::count('category');
        $this->setMeta('Панель управления');
        $this->set(compact('countNewOrders', 'countCategory', 'countProducts', 'countUsers'));
    }

}