<?php
require_once('animal.php');

/**
 * 
 */
class Ape extends Animal
{

	public function __construct($legs)
	{
		# code...
		$legs = $this->legs;
		$this->legs = $legs;
	}

	public function yell()
	{
		echo "Auooo";
	}
}

$sungokong = new Ape("kera sakti");
echo $sungokong->yell() // "Auooo"

?>