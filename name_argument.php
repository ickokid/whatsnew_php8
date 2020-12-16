<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

echo 'PHP versi : ' . phpversion()."<hr>";

function myFunc($satu = 0, $dua = 0, $tiga = 0){
	return $satu + $dua * $tiga;
}	

//echo myFunc(1,2,3);
echo "PHP 7 : ".myFunc(2,3)."<br>";
//echo "PHP 8 : ".myFunc(dua:2, tiga:3)."<br>";
echo "PHP 8 : ".myFunc(...array('dua' => 2, 'tiga' => 3))."<br>";  //myFunc(...['dua' => 2, 'tiga' => 3])
?>