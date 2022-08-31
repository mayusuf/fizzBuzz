<?php 
declare(strict_types=1);

namespace App;

/**
 * Class Statista
 */
final class StatistaClass
{	
	private int $start = 1;
	private int $end = 100;

	/**
    * @param int $number
    * @return string
    */
	public function findFizzBuzz(int $number): string
	{
		$res = "";

		if($number >0){

			if($number%15 === 0){

					$res = "FizzBuzz";

				}else if($number%3 === 0){

					$res = "Fizz";

				}else if($number%5 === 0){

					$res = "Buzz";

				}else{

					$res = strval($number);
				}

		}

		return $res;
	}

	/**
    * @return void
    */
	public function printFizzBuzzOneToHundred(): void
	{
		
		if($this->start <=0) exit();
		if($this->start>$this->end) exit();

		for($i=$this->start;$i<=$this->end;$i++){
				
				if($i%15 === 0){

					echo "FizzBuzz";
					echo "<br>";

				}else if($i%3 === 0){

					echo "Fizz";
					echo "<br>";

				}else if($i%5 === 0){

					echo "Buzz";
					echo "<br>";

				}else{
					echo $i;
					echo "<br>";
				}
			}
	}
}