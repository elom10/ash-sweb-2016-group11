<?php
include_once("../report.php");

class reportTest extends PHPUnit_Framework_TestCase
{
    public function testAddReport()
    {
		// generate test username sername
		$strTestUsername=random_bytes(10);
        $obj=new report();
		
        $this->assertEquals(true, 
		$obj->addReport(
			$strTestUsername,// username sername
		//	"221",	//lab name
			"air conditioner",		//equipment
			"does not boot"			//problem
			));
			
		$this->assertEquals(true,$obj->query("select * from problem where lab='$strTestUsername'"));
		//count the number of fields
		$this->assertCount(3,$obj->fetch());
    }
	

	
}