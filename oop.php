<?php


// $value="hi";
// echo $value;



class Human{
	private $words;
	public function setWords($words){
		$this ->words=$words;
	}
	public function getWords(){
		return $this->words;
	}
	public function sayIt(){
		return $this->getWords();
	}
}

$human = new Human;
$human->setWords("hi!");
echo $human->sayIt();




 /**
  * 
  */
 /*class ClassName extends AnotherClass
 {
 	
 	function __construct(argument)
 	{
 		# code...
 	}
 }*/
?>