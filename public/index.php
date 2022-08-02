<?php



use fw\core\Router;

$query = mb_substr($_SERVER['REQUEST_URI'], 1);
define ('DEBUG', 1);
define('WWW', __DIR__);
define('CORE', dirname(__DIR__).'/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__).'/app');
define('CACHE', dirname(__DIR__).'/tmp/cache/');
define('LAYOUT', 'default');
define('LIBS', dirname(__DIR__).'/vendor/fw/libs/');
define('MENU_TPLS', dirname(__DIR__).'/vendor/fw/widgets/menu/menu_tpl');



require '../vendor/fw/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';




// spl_autoload_register(function($class){
//     $file = ROOT . '/' . str_replace('\\','/',$class) . '.php';
    
//     if (is_file($file)){
//         require_once($file);
//     }
// });

new \fw\core\App;

Router::add('^pages/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller'=>'Page']);
Router::add('^pages/(?P<alias>[a-z-]+)$', ['controller'=>'Page', 'action' => 'view']);

//default routes
Router::add('^admin$', ['controller'=>'User', 'action'=>'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');



Router::dispatch($query);

