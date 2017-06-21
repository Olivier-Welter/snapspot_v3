<?php 

use PHPUnit\Framework\TestCase;

require_once('./php/Parametres.class.php');

/**
 * @covers Parametres
 */

final class Test extends TestCase
{
    public function testParamSlogan()
    {
    	$data = [];
    	$slogan = '';
    	$param = new Parametres($data);
    	$param->hydrate($data);

        $this->assertEquals(
            $param->setSlogan($slogan),
            ''
        );
    }

    public function testParamEvenement()
    {
    	$data2 = [];
    	$event = '';
    	$param2 = new Parametres($data2);
    	$param2->hydrate($data2);

    	$this->assertEquals(
    		$param2->setEvenement($event),
    		''
    	);
    }

    public function testParamMdp()
    {
    	$data3 =[];
    	$mdp = '';
    	$param3 = new Parametres($data3);
    	$param3->hydrate($data3);

    	$this->assertEquals(
    		$param3->setMdp($mdp),
    		''
    		);
    }
}