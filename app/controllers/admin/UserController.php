<?php 


namespace app\controllers\admin;
use fw\core\base\View;

class UserController extends AppController  {

    public $layout = 'admin';
    public function indexAction(){
        View::setMeta('Админка :: Главная страница', 'Описание админки', 'Ключевики админки');
        $test = 'Тестовая переменная';
        $data = ['test', '2'];
        $this->set([
            'test' => $test,
            'data' => $data,
        ]);
    }
    public function testAction(){
        $this->layout = 'admin';
    }


}