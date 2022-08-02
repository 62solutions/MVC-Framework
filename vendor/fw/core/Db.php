<?php

namespace fw\core;

class Db {

    use TSingletone;

    protected $pdo;
  //  protected static $instance;
    public static $countSql = 0;
    public static $queries = [];

    protected function __construct() {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . 'rb-mysql.php';
        $db = require '../config/config_db.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        \R::freeze(true);


    }

    // public static function instance() {
    //     if(self::$instance === null){
    //         self::$instance = new self;
    //     }
    //     return self::$instance;
    // }

    // код для исполнения запросов. не используем так как есть орм
    // public function execute ($sql, $params = []){
    //     self::$countSql++;
    //     self::$queries[] = $sql;
    //     $stmt = $this->pdo->prepare($sql);
    //     return $stmt->execute($params);
    // }
    // public function query($sql, $params = []) {
    //     self::$countSql++;
    //     self::$queries[] = $sql;
    //     $stmt = $this->pdo->prepare($sql);
    //     $res = $stmt->execute($params);
    //     if($res !== false) {
    //         return $stmt->fetchAll();
    //     }
    //     return [];
    // }

}
