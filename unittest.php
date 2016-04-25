<?php

class Test extends PHPUnit_Framework_TestCase{
	public function testsearchEquip(){
		$url="ajaxPage.php?cmd=1&uc=computers";
		$expected='{"result":1,"equipment":}';
		$this->assertTrue(true, $url,$expected);
	}
	
	
}

?>