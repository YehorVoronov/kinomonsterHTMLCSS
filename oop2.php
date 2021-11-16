<?php

	interface Say 
	{

		public function say();

	}


	/*class Human implements Say  {
		public function say(){
			echo "something 1 ";
		}		
	}*/

	abstract class Human implements Say
	{

		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}
	}

	class Man extends Human 
	{

		public function __construct($name) {
			parent::__construct($name);
		}

		public function beard() {
 			echo " I have a beard";
 		}

 		public function say() {
 			echo " I have a male voice , my name is ".$this->getName()." and ";
 		}
 		

	}

	
	class Women extends Human
	{
		
		function __construct($name) {
			parent::__construct($name);
		}

		public function  children() {
 			echo " I give birth to children";
 	    }

 	    public function say() {
 			echo " I have a female voice , my name is ".$this->getName()." and ";
 		}
	}

$man = new Man("Yehor");
$man->say();
$man->beard();
echo "<br>";
$women = new Women("Sasha");
$women->say();
$women->children();
?>