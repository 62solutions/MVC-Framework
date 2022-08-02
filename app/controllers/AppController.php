<?php

namespace app\controllers;

use fw\core\base\Controller;

class AppController extends Controller {
    
   public $menu;
    public $meta = [];
        public function __construct($route){
            parent::__construct($route);
            // любые условия для проверки контр/экшена и вывод/не вывод данных
            // if($this->route['action'] == 'test'){
            //     echo "only on main&test";
            // }
            new \app\models\Main;
            $this->menu = \R::findAll('category');
        }
        
        protected function setMeta ($title = '', $desc = '', $keywords = ''){
            $this->meta['title'] = $title;
            $this->meta['desc'] = $desc;
            $this->meta['keywords'] = $keywords;
        }    
        
}
