<?php

namespace tests\Udger;

use Codeception\Test\Unit;
use Udger\ParserFactory;
use UnitGuy;

class ParserFactoryTest extends Unit
{

    /**
     * @var UnitGuy
     */
    protected $guy;
    
    /**
     *
     * @var ParserFactory
     */
    protected $factory;

    protected function _before()
    {
        $this->factory = new ParserFactory("/dev/null");
    }
    
    public function testGetParser()
    {
        $this->assertInstanceOf("Udger\Parser", $this->factory->getParser());
    }
}
