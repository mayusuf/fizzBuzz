<?php 
declare(strict_types=1);

use \PHPUnit\Framework\TestCase;

final class StatistaClassTest extends TestCase 
{
    protected $statista;

    protected function setUp():void {

        $this->statista= new \App\StatistaClass;
    }

    protected function tearDown():void {
        $this->statista = null;
    }

    public function testFindFizzBuzz() {
        
        $input = 15;
        $output = "FizzBuzz";

        $this->assertEquals($this->statista->findFizzBuzz($input),$output);
        
    }
}
