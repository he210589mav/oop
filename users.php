<?php
header('Content-Type: text/html; charset=utf-8');

function __autoload($classname) {
    require $classname.".class.php";
}
$user1=new User("test1","login1","pass1");
$user2=new User("test2","login2","pass2");
$user3=new User("test3","login3","pass3");
$user4=new User("test3","login3","pass3");
$user4=clone $user2;
$user4->showInfo();
$user=new SuperUser("test4","login4","pass4","");
$user->role="admin";
$user->showInfo();
$user5=new SuperUser("test5","login5","pass5","role5");
$user5->getInfo();
var_dump($user5);
?>