<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

echo 'PHP versi : ' . phpversion()."<hr>";

Class MyClassPhp7
{
	private $number;
	public function setNumber(int $number){
		$this->number = $number;
	}	
	public function getNumber(){
		return $this->number;
	}	
}	


$clsphp7 = new MyClassPhp7;
//$clsphp7->setNumber(15); // ok
$clsphp7->setNumber(15.2); // ok tapi jadi int
//$clsphp7->setNumber('15'); // ok
//$clsphp7->setNumber('tulus'); // error
echo $clsphp7->getNumber();
?>