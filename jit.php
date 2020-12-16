<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$time_start = time();

echo 'PHP versi : ' . phpversion()."<hr>";

define("BAILOUT",16);
define("MAX_ITERATIONS",1000);

class Mandelbrot
{
    function __construct()
    {
        $d1 = microtime(1);
        for ($y = -39; $y < 39; $y++) {
            for ($x = -39; $x < 39; $x++) {

                if ($this->iterate($x/40.0,$y/40.0) == 0) 
                    echo("*");
                else
                    echo(" ");

            }
            echo("\n");
        }
        $d2 = microtime(1);
        $diff = $d2 - $d1;
        printf("\nPHP Elapsed %0.3f\n", $diff);
    }

    function iterate($x,$y)
    {
        $cr = $y-0.5;
        $ci = $x;
        $zr = 0.0;
        $zi = 0.0;
        $i = 0;
        while (true) {
            $i++;
            $temp = $zr * $zi;
            $zr2 = $zr * $zr;
            $zi2 = $zi * $zi;
            $zr = $zr2 - $zi2 + $cr;
            $zi = $temp + $temp + $ci;
            if ($zi2 + $zr2 > BAILOUT)
                return $i;
            if ($i > MAX_ITERATIONS)
                return 0;
        }
    
    }


}

ob_start();
$m = new Mandelbrot();
echo "<hr>";
ob_end_flush();
echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
?>