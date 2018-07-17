<?php

define('BASEDIR', __DIR__);
include BASEDIR.'/../pub/Loader.php';
spl_autoload_register("\\pub\\Loader::autoload");

class Event extends \pub\EventGenerator
{
    public function index()
    {
        echo 'EVENT<br \>';
        $this->notify();
    }
}

class Observer1 implements \pub\Observer
{
    public function update($info = null) {
        echo '逻辑1<br /> \n';
    }
}

$event = new Event();
$event->addOberver(new Observer1());
$event->index();

//$user= new \pub\User(1);
//
//$user->mobile = '13000000000';
//$user->name = '74110';
//$user->created = date('Y-m-d H:i:s');

//class Page 
//{
//    function index()
//    {
//        $user = \pub\Factory::getUser(1);
//        $user->name = 'oooo';
//        
//        $this->test();
//        
//        echo 'ok';
//    }
//    
//    function test()
//    {
//        $user = \pub\Factory::getUser(1);
//        $user->mobile = '15200001111';
//    }
//}
//
//$page = new Page();
//$page->index();

//var_dump($user->id, $user->mobile, $user->name, $user->created);
//exit();

//$db = new pub\Database();
//$db->where()->insert()->limit()->order();


//$db = new \pub\Database\MySQLi();
//$db->connect('127.0.0.1', 'root', '123456', 'xwboke');
//$db->query('show databases');
//$db->close();

//class Page
//{
//    /*
//     * @var pub\UserStrategy
//     */
//    protected $strategy;
//    public function index()
//    {
//        echo 'AD:';
//        $this->strategy->showAD();
//        echo '<br>';
//        
//        echo 'Category:';
//        $this->strategy->showCategory();
//    }
//    
//    public function setStrategy(pub\UserStrategy $user)
//    {
//        $this->strategy = $user;
//    }
//}
//
//$page = new Page();
//
//if (isset($_GET['female'])){
//    $strategy = new pub\FemaleUserStrategy();
//} else {
//    $strategy = new \pub\MaleUserStrategy();
//}
//$page->setStrategy($strategy);
//$page->index();
