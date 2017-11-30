<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');




class Calc {
	public $num1;
	public $num2;
	public $cal;

	public function __construct($num1, $num2, $cal){
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->cal 	= $cal; 
	}

	public function makeCal(){
		switch ($this->cal) {
			case 'add':
				# code...
				$result = $this->num1 + $this->num2;
				break;

			case 'sub':
				# code...
				$result = $this->num1 - $this->num2;
				break;

			case 'mul':
				# code...
				$result = $this->num1 * $this->num2;
				break;
				
			
			default:
				$result = "error has thrown";
				break;
		}

		return $result;
	}
}

