<?php



class Human {
	private $name;

	public function __construct($name){
		$this->name=$name;
	}

	public function setName($name){
		$this->name=$name;
	}

	public function say(){
		echo "my name is".$this->name." and ";
	}

	
}

 /*$human= new Human("Yehor");
 $human->say();

*/

 class Man extends Human {
 	
 	public function beard() {
 		echo " I have a beard";
 	}

 }

 

 class Women extends Human {
 	
 	public function  children() {

 		echo " I give birth to children";
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
