<?php

namespace tests\Udger;

use Codeception\Stub;
use Codeception\Test\Unit;
use Udger\Parser;
use Udger\ParserInterface;
use UnitGuy;

class ParserMultipleTest extends Unit
{

    /**
     * @var UnitGuy
     */
    protected $guy;

    /**
     *
     * @var ParserInterface
     */
    protected $parser;

    protected function _before()
    {
        $this->parser = new Parser(
            Stub::makeEmpty("Udger\Helper\IP")
        );
        $this->parser->setDataFile(dirname(__DIR__) . "/fixtures/udgercache/udgerdb_v3.dat");
    }

    protected function _after()
    {
    }

    //tests
    public function testParseMultpileAgentStrings()
    {
        $handle = fopen(dirname(__DIR__) . "/fixtures/agents.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $result = $this->parser->parse($line);
            }
            fclose($handle);
        } else {
            // error opening the file.
        }
    }
}
