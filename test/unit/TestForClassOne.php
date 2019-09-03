     <?php

         final class TestForClassOne extends \PHPUnit_Framework_TestCase{
             function testActionOne(){

                 $classOne = new  \App\ClassOne;

                 $this->assertTrue($classOne->actionOne());
             }
         }