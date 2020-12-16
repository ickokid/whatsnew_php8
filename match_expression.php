<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

echo 'PHP versi : ' . phpversion()."<hr>";

//$angka = 1;
$angka = '1';

echo "PHP 7 : ";
switch($angka){
	case 1 : echo "Angka 1"; break;
	case 2 : echo "Angka 2"; break;
	case 3 : echo "Angka 3"; break;
	case 4 : echo "Angka 4"; break;
	default : echo "Tidak Ada"; break;
}	
?>