<?php
header('Content-Type: text/html; charset=utf-8');
class User{
	public $name;
	public $login;
	public $password;
	public function setName($name,$login,$password){
        $this->name=$name;
		$this->login=$login;
		$this->password=$password;
		//$this->showInfo();
		//$this->delLogin();
	}
	public function __clone(){
		print "Объект был клонирован <br>";
		
	}
	public function showInfo(){
		echo "Имя: ".$this->name,"<br>";
		echo "Логин: ".$this->login,"<br>";
		echo "Пароль: ".$this->password,"<br>";
	}
	public function delLogin(){
		echo "Пользователь ".$this->login." удален","<br>";
	}
}

class SuperUser extends User{
	public $role;
	
}
$user1=new User();
$user1->setname("test1","login1","pass1");
$user2=new User();
$user2->setname("test2","login2","pass2");
$user3=new User();
$user3->setname("test3","login3","pass3");
$user4=new User();
$user4=clone $user2;
$user4->showInfo();
$user=new SuperUser();


?>