<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

echo 'PHP versi : ' . phpversion()."<hr>";

Class Orang
{
	private $nama;
	private $umur;
	private $email;
	
	public function __construct(string $nama, int $umur, string $email){
		$this->nama = $nama;
		$this->umur = $umur;
		$this->email = $email;
	}	
	
	public function Cetak(){
		return "Hi Nama Saya : ".$this->nama." & Umur : ".$this->umur;
	}	
}	


$org = new Orang("Tampan Sekali", 35, "sukardo.sekali@tribunnews.com");
echo $org->Cetak();
?>