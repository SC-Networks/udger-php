<?php

namespace tests\Udger;

use Codeception\Stub;
use Codeception\Test\Unit;
use Exception;
use Udger\Parser;
use UnitGuy;

class ParserTest extends Unit
{

    /**
     * @var UnitGuy
     */
    protected $guy;
    
    /**
     *
     * @var Parser
     */
    protected $parser;

    protected function _before()
    {
        $this->parser = new Parser(
            Stub::makeEmpty("Udger\Helper\IP")
        );
        #$this->parser->setAccessKey("udger-php-unit");
        $this->parser->setDataFile("/dev/null");
    }

    protected function _after()
    {
    }

    // tests
    public function testSetDataFile()
    {
        $this->expectException(Exception::class);
        $this->assertTrue($this->parser->setDataFile("/this/is/a/missing/path"));
    }
    
    public function testSetUA()
    {
        $this->assertTrue($this->parser->setUA("agent"));
    }
    
    public function testSetIP()
    {
        $this->assertTrue($this->parser->setIP("0.0.0.0"));
    }
    
    public function testParse()
    {
        $this->parser->parse();
    }
}
