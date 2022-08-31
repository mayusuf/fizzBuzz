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

    /**
     * @dataProvider provider
     */
    public function testFindFizzBuzz($input,$expected) {
        
        /*$input = 3;
        $expected = "Fizz";*/

        $this->assertEquals($this->statista->findFizzBuzz($input),$expected);
        
    }

    public function provider()
    {
        return array(
          array(4, 4),
          array(7, 7),
          array(25, "Buzz"),
          array(15, "FizzBuzz"),
          array(50, "Buzz"),
          array(90, "FizzBuzz"),
          array(100, "Buzz"),
          array("test", ""),
        );
    }
}
