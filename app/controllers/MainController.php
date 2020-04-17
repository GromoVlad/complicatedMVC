<?php


namespace app\controllers;


use \RedBeanPHP\R as R;
use webShop\base\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $posts = R::findAll('test');
        $postTwo = R::findOne('test', 'id = ?', [2]);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики');
        $name = 'John';
        $age = 60;
        $names = ['Andrey', 'Jane', 'Vasya'];
        $logs = R::getDatabaseAdapter()->getDatabase()->getLogger();
        $debugging = $logs->grep('SELECT');

        $cache = Cache::getInstance();
        $cache->set('test', $names);
    //    $cache->delete('test');
        $data = $cache->get('test');
        debug($data);
        $this->set(compact('name', 'age', 'posts', 'debugging', 'postTwo'));
    }
}