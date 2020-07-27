<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MiscTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHelper()
    {
       $url = makeEditUrl('docs/System/deploiement-sur-hebergement');

       $this->assertEquals('deploiement-sur-hebergement',$url);
    }
}
