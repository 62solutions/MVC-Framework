<?php

namespace app\controllers;

use app\models\Main ;
use fw\core\App ;
use fw\core\base\View;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MainController extends AppController {

   
    public $layout = 'default';
    public function indexAction(){

        
    // $log = new Logger('name');
    // $log->pushHandler(new StreamHandler(ROOT . '/tmp/your.log', Level::Warning));
    // $log->warning('Foo');
    // $log->error('Bar');

        //  $mailer = new PHPMailer(true);
        //  var_dump($mailer);
        //  \R::fancyDebug(true);
        // App::$app -> getList();    
        // $posts = App::$app->cache->get('posts');
        // if(!$posts){
        //     $posts = \R::findAll('posts');  
        //     App::$app->cache->set('posts', $posts, 3600*24);
        // }
        // echo date('Y-m-d H:i', time());
        // echo '<br>';
        // echo date('Y-m-d H:i', 1654617867);

        $model = new Main;
        $posts = \R::findAll('posts');
        $post = \R::findOne('posts', 'id=1');
        $menu = $this->menu;
        $title = 'PAGE TITLE'; 
        View::setMeta('Main page', 'Page description', 'Page keywords');
        $meta = $this->meta;
        $this->set(compact('title','posts', 'menu', 'meta'));

    }

    public function testAction() {
        if($this->isAjax()){
          $model = new Main();
          $post = \R::findOne('posts', "id = {$_POST['id']}");
          $this->loadView('_test', compact('post'));
        
        }
        echo 222;

       
    }
}