<?php

require 'rb-mysql.php';
$db = require '../config/config_db.php';
R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze(true);
R::fancyDebug( TRUE );

//var_dump(R::testConnection());

// Create

// $cat = R::dispense('category');

// $cat->title='category_1';


// $id = R::store($cat);

//var_dump($id);

//$cat = R::load('posts', 1);


$var = R::dispense('posts');

$var->id  = 3;
$var->text = "redbeanPHP";

R::store($var);

R::trash($var);

