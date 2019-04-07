<?php
class SuperUser extends User implements IsuperUser {
	public $role;
    public static $countAdmin=0;
    public function __construct($name,$login,$password,$role){
		
        parent::__construct($name,$login,$password);
		$this->role=$role;
        ++self::$countAdmin;
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