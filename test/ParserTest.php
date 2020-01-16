<?php

namespace Soldierm\Ndjson\Test;

use PHPUnit\Framework\TestCase;
use Soldierm\Ndjson\Parser;

class ParserTest extends TestCase
{
    public function testDecode()
    {
        $ndjson = <<<NDJSON
{"foo":"bar"}
{"hello":"world"}
NDJSON;
        $decode = Parser::decode($ndjson);

        $this->assertIsArray($decode);
        $this->assertCount(2, $decode);
    }

    public function testEncode()
    {
        $array = [
            ['foo' => 'bar'],
            ['hello' => 'world']
        ];
        $encode = Parser::encode($array);

        $this->assertIsString($encode);
        $this->assertContains('{"foo":"bar"}', $encode);
        $this->assertContains('{"hello":"world"}', $encode);
    }
}
