<?php
class SuperUser extends User implements IsuperUser {
	public $role;
	public function __construct($name,$login,$password,$role){
		parent::__construct($name,$login,$password);
		$this->role=$role;
		}
    public function showInfo(){
    	parent::showInfo();
    	echo "Role:".$this->role.PHP_EOL;
    	echo "<br>";
    }
    public function getInfo(){
    	return (array) $this;
    	    	
    }
}
?>