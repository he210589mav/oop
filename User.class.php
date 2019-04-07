<?php
class User extends AUser{
	public $name;
	public $login;
	public $password;
	public static $countUser=0;
	public function __construct($name,$login,$password){
        $this->name=$name;
		$this->login=$login;
		$this->password=$password;
		++self::$countUser;
		//$this->showInfo();
	}
	public function __clone(){
		print "Объект был клонирован <br>";
    }
	public function showInfo(){
		echo "Имя: ".$this->name,"<br>";
		echo "Логин: ".$this->login,"<br>";
		echo "Пароль: ".$this->password,"<br>";
		//echo "role: ".$this->role,"<br>";
	}
	public function __destruct(){
		echo "Пользователь ".$this->login." удален","<br>";
	}
}
?>