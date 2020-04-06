<?php

class User{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		echo $this->name;
	}
	public static function greet()
	{
		echo "Welcome to OOP";
	}

}
// facade pattern
User::greet();


?>
