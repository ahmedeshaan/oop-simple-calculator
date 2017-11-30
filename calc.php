<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include "includes/calc.inc.php";



$num1 	= $_POST['num1'];

$num2 	= $_POST['num2'];

$cal 	= $_POST['cal'];

$calculator = new Calc($num1, $num2, $cal);

echo "Result: " . $calculator->makeCal();
