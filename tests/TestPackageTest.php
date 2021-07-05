<?php

namespace OlehMordach\TestPackage\Tests;

use OlehMordach\TestPackage\TestPackage;
use PHPUnit\Framework\TestCase;

class TestPackageTest extends TestCase
{
    public function testItIsNotNull()
    {
        $this->assertNotNull((new TestPackage())->hello());
    }
}
