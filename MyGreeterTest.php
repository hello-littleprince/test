<?php
require 'Client.php';
class MyGreeterTest
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }
    public function test_Instance()
    {
        return $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }
    public function test_getGreeting()
    {
        /*$this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );*/
        return $this->greeter->getGreeting();
    }

    protected function assertEquals($value1=null,$given=null)
    {
        if ($value1 === null || $given === null) {
            return 'please given 2 values';
        }
        return $value1 === $given ? 'true' : 'false';

    }
}
$test = new MyGreeterTest();
$test->setUp();
$t_instance = $test->test_Instance();
print($t_instance);
echo "<br />";
$t_greet =$test->test_getGreeting();
print($t_greet);
