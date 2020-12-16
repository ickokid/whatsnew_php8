<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

echo 'PHP versi : ' . phpversion()."<hr>";

$text = "Foo Bar Baz";
$string = "Foo";

echo "Kalimat : ".$text."<br>";
echo "Kata yang mau di cari : ".$string."<br>";


//PHP 7
if (strpos($text, $string) !== false) { //case sensitive
	echo "PHP 7 : Ada<br>";
} else {
	echo "PHP 7 : Tidak Ada<br>";
}



//PHP 8
if (str_contains($text, $string)) {
	echo "PHP 8 : Ada<br>";
} else {
	echo "PHP 8 : Tidak Ada<br>";
}
?>