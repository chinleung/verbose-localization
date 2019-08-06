<?php

namespace ChinLeung\VerboseLocalization\Tests;

use PHPUnit\Framework\TestCase;

class MethodsTest extends TestCase
{
    /** @test **/
    public function the_trait_methods_are_available_in_the_class() : void
    {
        $methods = (new \ReflectionClass(ExampleClass::class))
            ->getMethods();

        $this->assertNotEmpty($methods);
    }
}
