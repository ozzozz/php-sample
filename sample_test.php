<?php
require_once 'sample.php';
 
class SampleTest extends PHPUnit\Framework\TestCase{
 
  public function setUp(){
    $this->sample = new Sample;
  }
 
  public function testGetValue(){
    $this->sample->set_value(20);
    $this->assertEquals(40,$this->sample->get_value());
  }
}
?>
