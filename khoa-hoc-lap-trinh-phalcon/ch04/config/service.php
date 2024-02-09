<?php
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Router;
use Multiphalcon\Vendor\Zendvn\Grouprouter\Groupchapter04;
use Multiphalcon\Vendor\Zendvn\Helper\Zendhelper;
use Multiphalcon\Vendor\Zendvn\Service\UserService;
use Multiphalcon\Vendor\Zendvn\Service\ExampleService;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\Url;

$di = new FactoryDefault();

$di->set('router', function (){
    return require_once APPLICATION_PATH.'/config/router.php';
});

$di->set('zendhelp', function (){
    return new Zendhelper();
});

$di->set('application_service', function (){
     echo '<h3 style="color:red">application_service -- service.php</h3>';
});

$di->set('same_service', function (){
    echo '<h3 style="color:red">same_service ---- service.php</h3>';
});

$di->set('a_service', function (){
    echo '<h3 style="color:red">a_service - service.php</h3>';
});

$di->set('setting_service', function(){
    return new ExampleService(); 
});

$di->set('session', function (){
   $session = new \Phalcon\Session\Adapter\Files();
   $session->start();
   return $session; 
});


$di->set('db', function(){
  return  new \Phalcon\Db\Adapter\Pdo\Mysql([
        'host'      =>  'localhost',
        'username'  =>  'root',
        'passwrod'  =>  '',
        'dbname'    =>  'my_phalcon',
        'charset'   =>  'utf8'
    ]);
});


$di->set('db2', function(){
    return  new \Phalcon\Db\Adapter\Pdo\Mysql([
        'host'      =>  'localhost',
        'username'  =>  'root',
        'passwrod'  =>  '',
        'dbname'    =>  'my_phalcon',
        'charset'   =>  'utf8'
    ]);
});

$di->set('db_multi_connect', function(){
    return  new \Phalcon\Db\Adapter\Pdo\Mysql([
        'host'      =>  'localhost',
        'username'  =>  'root',
        'passwrod'  =>  '',
        'dbname'    =>  'multi_connect',
        'charset'   =>  'utf8'
    ]);
});

   







