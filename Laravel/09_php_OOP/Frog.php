<?php
require_once('animal.php');

/**
 * 
 */
class Frog extends Animal
{

	public function __construct($legs)
	{
		# code...
		$legs = $this->legs + 2;
		$this->legs = $legs;
	}

	public function jump()
	{
		echo "hop hop";
	}
}

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo $kodok->legs;

?>