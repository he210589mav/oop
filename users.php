<?php
header('Content-Type: text/html; charset=utf-8');
interface IsuperUser{
	function getInfo();
}
class User extends AUser{
	public $name;
	public $login;
	public $password;
	public function construct($name,$login,$password){
        $this->name=$name;
		$this->login=$login;
		$this->password=$password;
		$this->showInfo();
	}
	public function __clone(){
		print "Объект был клонирован <br>"; //обнуление не придумал
    }
	public function showInfo(){
		echo "Имя: ".$this->name,"<br>";
		echo "Логин: ".$this->login,"<br>";
		echo "Пароль: ".$this->password,"<br>";
		echo "role: ".$this->role,"<br>";
	}
	public function destruct(){
		echo "Пользователь ".$this->login." удален","<br>";
	}
}
class SuperUser extends User implements IsuperUser {
	public $role;
	public function takeRole($role){
		$this->role=$role;
		parent::User($role);
        }
    public function showInfo(){
    	parent::showInfo($role);
    }
    public function getInfo(){
    	//parent::construct($name,$login,$password);
    	    	
    }
}
abstract class AUser{
	abstract function showInfo();
}
$user1=new User();
$user1->construct("test1","login1","pass1");
$user2=new User();
$user2->construct("test2","login2","pass2");
$user3=new User();
$user3->construct("test3","login3","pass3");
$user4=new User();
$user4=clone $user2;
$user4->showInfo();
$user=new SuperUser();
$user->role="admin";
$user->showInfo();
$user5=new SuperUser();
$user5->getInfo();
var_dump($user5);
?>